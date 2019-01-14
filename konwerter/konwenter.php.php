<?php

require_once('konw_header.php');

if (isset($_POST['submit'])) {
	if(!empty($_POST['konwerter'])) {

		$originalData = nl2br($_POST['dane']);
		$result = $_POST['konwerter'];

		switch($result) {
			case 'aaaAAA' :
				$score = strtoupper($originalData);
				break;
			case 'AAAaaa' :
				$score = strtolower($originalData);
				break;
			default :
				$score = ucfirst($originalData);
		}
	echo "<p>Wynik działania:</p>$score<p></p><p></p>";
	}
	else { echo 'Nie dokonałaś wyboru'; }
}


?>

<p>Wybierz odpowiedni rodzaj formatowania, wklej tekst i naciśnij konwertuj :-)</p>
<form action="" method="post">
	<p><input type="radio" name="konwerter" value="aaaAAA">aaa --> AAA</p>
	<p><input type="radio" name="konwerter" value="AAAaaa">AAA --> aaa</p>
	<p><input type="radio" name="konwerter" value="aaaAaa">aaa --> Aaa</p>
	<p><textarea name="dane" rows="14" cols="30" placeholder="Tu wklej swój tekst"></textarea></p>
	<p><input type="submit" name="submit" value="Konwertuj"></p>
</form>

<?php
require_once('konw_footer.php');
?>