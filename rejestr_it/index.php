<?php

session_start();

require_once('it_header.php');
require_once('../database.php');
require_once('../function.php');
require_once('variables.php');

	$tab = '<table border="2" cellspacing="2" cellpadding="5">
				<tr><th>ID</th><th>Przyjazna nazwa</th><th>Tytuł Umowy</th><th>Data Zawarcia</th>
				<th>Ważność umowy</th><th>Kategoria</th><th>Data dodania</th><th></th></tr>';

	/*$query = "SELECT it_ida, it_agreement.simple_name, it_agreement.name, date_start, date_end, 
				category, it_company.simple_name AS company FROM `it_agreement` 
				LEFT JOIN it_category USING (it_idcat) 
				LEFT JOIN it_company USING (it_idc) 
				LEFT JOIN it_location USING (it_idl)";*/
?>
	Filtruj: <br>
		<form method="post" action="">
			<input type="submit" name="submit1" value="Pokaż wszystko" /><br>
			<input type="text" name="filtering2" /><input type="submit" name="submit2" value="Filtruj po tytule" /><br>
			<input type="text" name="filtering3" /><input type="submit" name="submit3" value="Filtruj po nazwie firmy" /><br>
		</form>
		<form method="post" action="">
			<select name="years">
				<?php
					foreach ($yearsDefault as $option) {
						echo '<option value="' .$option. '">' .$option. '</option>';
					}
				?>
			</select>
			<input type="submit" name="submit4" value="Wyślij" />
		</form>
<br>
<br>

<?php

	if (isset($_POST['submit1'])) {

		tab(11, $query, $tab);
	} 

	if (isset($_POST['submit2'])) {

		$name = trim($_POST['filtering2']);
	
			$query = $query. "WHERE it_agreement.name = '$name'";

		tab(11, $query, $tab);
	} 

	if (isset($_POST['submit3'])) {

		$name = trim($_POST['filtering3']);

			$query = $query. "WHERE it_company.simple_name = '$name'";

		tab(11, $query, $tab);
	} 

	if (isset($_POST['submit4'])) {

		$years = trim($_POST['years']);
		$yearsStart = $years. '-01-01';
		$yearsEnd = $years. '-12-31';

			$query = $query. "WHERE date_start BETWEEN '$yearsStart' AND '$yearsEnd'";

		tab(11, $query, $tab);
	}

require_once('it_footer.php');
?>