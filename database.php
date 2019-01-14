<?php

$dsn = "mysql:host=localhost;dbname=bs_rejestr;charset=utf8";
$user = "root";
$pass = "";

try {
	$dbo = new PDO($dsn, $user, $pass);
	echo 'Połączenie nawiązano<br><br>';
}
catch (PDOException $e) {
	echo 'Błąd podczas otwierania połączenia: ' . $e->getMessage();
	exit;
}







?>