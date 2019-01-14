<?php

session_start();

require_once('it_header.php');
require_once('../database.php');
require_once('../function.php');
require_once('variables.php');

	$id = $_GET['id'];

	$query = $query_views. "WHERE it_ida = $id";

	$row = manySelect($query);

	echo "<h1>$row[2]</h1>";
	echo '<div id="d1">
	<dl>';
	
		echo "
		<h2>Informacje dotyczące umowy</h2>
		<dt><b>Identyfikator umowy:</b></dt><dd>$row[0]</dd><br>
		<dt><b>Skrót:</b></dt><dd>$row[1]</dd><br>
		<dt><b>Tytuł umowy:</b></dt><dd>$row[2]</dd><br>
		<dt><b>Firma z którą została zawarta umowa:</b></dt><dd>$row[7]</dd><br>
		<dt><b>Kategoria:</b></dt><dd>$row[5]</dd><br>
		<dt><b>Lokalizacja Umowy:</b></dt><dd>$row[6]</dd><br>
		<dt><b>Data rozpoczęcia umowy:</b></dt><dd>$row[3]</dd><br>
		<dt><b>Data zakończenia umowy:</b></dt><dd>$row[4]</dd><br>
		<dt><b>Dodatkowe Informacje:</b></dt><dd>$row[8]</dd></dl><br>
		</div>";

		echo '<div id="d2">';

		echo "<h2>Informacje techniczne</h2>
		<dt>Data dodania do systemu:</dt><dd>$row[9]</dd><br>
		<dt>Dodał:</dt><dd>$row[0]</dd><br><br>
		

		
			<h2>Pliki</h2>";

		$main = "scan/$row[0]";
		if (!$folder = opendir($main)) {
			echo 'Nie można otworzyć katalogu.';
		}

		while (($file = readdir($folder)) == true) {
			if ($file != "." && $file != "..") {
				echo "<a href=\"$main/$file\" target=\"_blank\">$file</a><br>";
			}
		}

	closedir($folder);
	?>
	</div>
	<div id="d3">
	</div>



<?php
require_once('it_footer.php');
?>