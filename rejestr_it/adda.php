<?php

require_once('it_header.php');
require_once('../database.php');
require_once('../function.php');

$question = "SELECT it_idc, simple_name FROM it_company";
$question2 = "SELECT * FROM it_location";
$question3 = "SELECT * FROM it_category";

if (isset($_POST['submit'])) {

	$post = array($_POST['przyjaznaNazwa'], $_POST['nazwa'], $_POST['firma'], $_POST['dataZawarcia'], $_POST['dataZakonczenia'], $_POST['lokalizacja'], $_POST['kategoria'], $_POST['uwaga']);
	$trimPost = array_map('trim', $post);

	if (!empty($trimPost[0]) && !empty($trimPost[1]) && !empty($trimPost[3])) {

		if (empty($trimPost[4])) {
				$trimPost[4] = '1111-11-11';
		}
		if (empty($trimPost[7])) {
				$trimPost[7] = null;
		}

			$query = "INSERT INTO it_agreement VALUES (0, NOW(), '$trimPost[0]', '$trimPost[1]', '$trimPost[2]', '$trimPost[3]', '$trimPost[4]', '$trimPost[5]', '$trimPost[6]', '$trimPost[7]')"; 

				if ($dbo->exec($query) !== false) {
					echo 'Dodano';
				} else {
					echo 'Byk';
					print_r($dbo->errorInfo());
				}

						$query = "SELECT MAX(it_ida) FROM it_agreement";
						$id = onceSelect($dbo, $query);
						
						$query2 = "SELECT simple_name FROM it_agreement WHERE it_ida = '$id'";
						$simple_name = onceSelect($dbo, $query2);

						mkdir("./scan/$id");

						$date = date('YmdHis');

							if($_FILES['skan']['error'] == UPLOAD_ERR_OK) {
								$scan_name = $_FILES['skan']['name'];
								$scan_tmp = $_FILES['skan']['tmp_name']; 
								$explode = explode('.', $scan_name);

									if ($explode[1] == 'pdf' || $explode[1] == 'doc' || $explode[1] == 'docx' || $explode[1] == 'jpg') {
										$scan = $id.'-'.$simple_name.'-'.$date.'.'.$explode[1];
										$write = 'scan/' .$id. '/'.$scan;

										move_uploaded_file($scan_tmp, $write);

									} else {
										echo 'to nie jest prawidłowy plik';
									}    
							} else {
								echo "Wystapił błąd: ";
								switch ($_FILES['image']['error']) {
									case UPLOAD_ERR_INI_SIZE:
									case UPLOAD_ERR_FORM_SIZE:
										echo 'Przekroczony maksymalny rozmiar pliku';
										break;
									case UPLOAD_ERR_NO_TMP_DIR:
										echo 'Brak dostepu do katalogu tymczasowego';
										break;
									case UPLOAD_ERR_CANT_WRITE:
										echo 'Nie udao się zapisać pliku na serwerze';
										break;
									default:
										echo 'Nieznany typ błędu';
										break;
								}
							}

	} else {
		echo 'Musisz podać wymagane dane';
	}
}

?>

<form action="" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Dodawanie nowej Umowy</legend>
			<table>
				<tr>
					<td>Przyjazna nazwa:</td><td><input type="text" name="przyjaznaNazwa" /></td>
				</tr><tr>
					<td>Nazwa:</td><td><input type="text" name="nazwa" /></td>
				</tr><tr>
					<td>Firma:</td><td><select name="firma"><?php getOption($dbo, $question); ?></select></td>
				</tr><tr>
					<td>Data zawarcia Umowy:</td><td><input type="date" name="dataZawarcia" /></td>
				</tr><tr>
					<td>Data zakończenia Umowy:</td><td><input type="date" name="dataZakonczenia" /></td>
				</tr><tr>
					<td>Lokalizacja:</td><td><select name="lokalizacja"><?php getOption($dbo, $question2); ?></select></td>
				</tr><tr>
					<td>Kategoria:</td><td><select name="kategoria"><?php getOption($dbo, $question3); ?></select></td>
				</tr><tr>
					<td>Uwagi/Dodatkowe informacje:</td><td><textarea name="uwaga"></textarea></td>
				</tr><tr>
					<td>Dodaj skan:</td><td><input type="file" name="skan" /></td>
				</tr><tr>
					<td></td><td><input type="submit" name="submit" value="Dodaj Umowę" /></td>
				</tr>
			</table>
	</fieldset>
</form>


<?php
require_once('it_footer.php');
?>