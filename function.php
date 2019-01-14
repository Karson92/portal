<?php

require_once ('database.php');

$years = array (2002, 2003);


// lista <option>
function getOption ($dbo, $sql) {
	$query = $sql;
	$result = $dbo->query($query);
	while($row = $result->fetch(PDO::FETCH_NUM)) {
		echo '<option value="' .$row[0]. '">' .$row[1]. '</option>';
	}
}

function manySelect ($query) {
	global $dbo;
	$result = $dbo->query($query);
	$data = $result->fetch(PDO::FETCH_NUM);
	$result->closeCursor();
	return $data;
}

function onceSelect ($dbo, $query) { //pobiera jedną kolumnę z zapytania SELECT
	$result = $dbo->query($query);
	$data = $result->fetch(PDO::FETCH_NUM);
	$data = $data[0];
	$result->closeCursor();
	return $data;
}

function tab ($mark, $query, $tab) {
	global $dbo;
	$result = $dbo->prepare($query);
	$result->execute();
	$columnCount = $result->columnCount();
	echo $tab;
		if ($mark == 1 || $mark == 11) {
			while ($row = $result->fetch(PDO::FETCH_NUM)) {
				echo '<tr>';
				for ($j = 0; $j < $columnCount; $j++){
					echo '<td>' .$row[$j]. '</td>';
				}
				if ($mark == 11) {
					echo '<td><a href="view?id=' .$row[0]. '">Szczegóły</a></td></tr>';
				}
			}
		}
		if ($mark == 2) {
			$row = $result->fetch(PDO::FETCH_NUM);
				for ($i=0; $i < $columnCount; $i++) {
					echo '<tr><td>' .$row[$i]. '</td></tr>';
				}
		}
	echo '</table>';
	$result->closeCursor();
}



?>