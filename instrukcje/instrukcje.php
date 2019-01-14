<?php

require_once('inst_header.php');
require_once('../function.php');

if (isset($_GET['value'])) {
	$dir = $_GET['value'];
		if (!$folder = opendir($dir)){
			echo 'Nie można otworzyć katalogu.';
		}

		while (($file = readdir($folder)) == true) {
			if ($file != "." && $file != "..") {
				echo "<a href=\"$dir/$file\" target=\"_blank\">$file</a><br>";
			}
		}

		closedir($folder);

		echo '<br><br><a href="instrukcje.php"><button type="button">Wstecz</button></a>';

} else {

	$main = "./";
	echo '<br>';	
	if (!$folder = opendir($main)) {
		echo 'Nie można otworzyć katalogu.';
	}

	while (($dir = readdir($folder)) == true) {
		if ($dir != "." && $dir != "..") {
			if (is_dir($dir) == true) {
			echo '<a href="instrukcje.php?value=' .$dir. '"><input type="button" value="' .$dir. '" /></a>'; 
			} 
		}
	}

	closedir($folder);
}

require_once('inst_footer.php');
?>