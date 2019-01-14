<?php
session_start();
require_once('it_header.php');
require_once('../database.php');

	if(isset($_POST['submit'])) {
		if(!empty($_POST['nazwa'])) {
			
			$name = trim($_POST['nazwa']);

			$query = "INSERT INTO it_category VALUES (0, '$name')";
			if ($rowNo = $dbo->exec($query) !== false) {
				echo 'Dodano';

			} else { echo 'Byk';}

		} else { echo 'Nie wprowadziłaś/eś nazwy Kategorii'; }
	}

?>

<form action="" method="post">
	<fieldset>
		<legend>Dodawanie nowej Kategorii</legend>
			<table>
				<tr>
					<td>Nazwa:</td><td><input type="text" name="nazwa" /></td>
				</tr><tr>
					<td></td><td><input type="submit" name="submit" value="Dodaj Kategorię" /></td>
				</tr>
			</table>
	</fieldset>
</form>

<?php
require_once('it_footer.php');
?>