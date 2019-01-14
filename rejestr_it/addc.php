<?php
session_start();

require_once('it_header.php');
require_once('../database.php');
require_once('../function.php');

$question = "SELECT * FROM it_category";

	if(isset($_POST['submit'])) {

		$simpleName = trim($_POST['przyjaznaNazwa']);
		$name = trim($_POST['nazwa']);
		$address = trim($_POST['adres']);
		$phone = trim($_POST['telefon']);
		$email = trim($_POST['email']);
		$category = $_POST['kategoria'];

		if(!empty($simpleName) && !empty($name)) {

			$querySimple = "SELECT simple_name FROM it_company WHERE simple_name = '$simpleName'";
			$queryName = "SELECT full_name FROM it_company WHERE full_name = '$name'";
			$resultSimple = $dbo->query($querySimple);
			if(!$resultSimple) {
				print_r( $dbo->errorInfo());
			}
			$resultName = $dbo->query($queryName);
			$rowSimple = $resultSimple->rowCount();
			$rowName = $resultName->rowCount();

			if($rowSimple == 0) {
				if($rowName == 0) {

					$queryInsert = "INSERT INTO it_company VALUES (0, '$simpleName', '$name', '$address', '$phone', '$email', NOW(), '$category' 1)";
					if ($rowNo = $dbo->exec($queryInsert) !== false) {
					echo 'Dodano';
					} else {
					echo 'Byk';
					}

				} else {
					echo 'Istnieje już taka nazwa';
				}

			} else {
				echo 'Istnieje ju taka Przyjazna nazwa';
			}


		} else {
			echo 'brak wypełnienia wymaganych pól';
		}
	}

?>

<form action="" method="post">
	<fieldset>
		<legend>Dodawanie nowej Firmy</legend>
			<table>
				<tr>
					<td>Przyjazna nazwa:</td><td><input type="text" name="przyjaznaNazwa" /></td>
				</tr><tr>
					<td>Nazwa:</td><td><input type="text" name="nazwa" /></td>
				</tr><tr>
					<td>Adres:</td><td><textarea name="adres"></textarea></td>
				</tr><tr>
					<td>telefon:</td><td><input type="text" name="telefon" /></td>
				</tr><tr>
					<td>email:</td><td><input type="text" name="email" /></td>
				</tr><tr>
				</tr><tr>
					<td>kategoria:</td><td><select name="kategoria"><?php getOption($dbo, $question); ?></td>
				</tr><tr>
					<td></td><td><input type="submit" name="submit" value="Dodaj Umowę" /></td>
				</tr>
			</table>
	</fieldset>
</form>

<p></p>
<p></p>

	<table>
		<tr>
			<th>ID</th><th>Przyjazna nazwa</th><th>Nazwa właściwa</th><th>Adres</th><th>Telefon</th><th>Email</th><th>Data dodania</th>
		</tr>
<?php

	$querySelect = "SELECT * FROM it_company";
	$resultSelect = $dbo->query($querySelect);
	//$row = $resultSelect->fetch(PDO::FETCH_ASSOC);
	/*if (!$row){
		print_r($dbo->errorInfo);
	}*/
	while($row = $resultSelect->fetch(PDO::FETCH_ASSOC)) {
		echo '<tr><td>'.$row['it_idc'].'</td>';
		echo '<td>'.$row['simple_name'].'</td>';
		echo '<td>'.$row['full_name'].'</td>';
		echo '<td>'.$row['address'].'</td>';
		echo '<td>'.$row['phone'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['date'].'</td></tr>';
	}

echo '</table>';
require_once('it_footer.php');
?>