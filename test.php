<?php

require_once('database.php');


						$query = "SELECT MAX(it_ida) FROM it_agreement";
						

						function onceQuery($dbo, $query) {
						$result = $dbo->query($query); //pobieranie największego id z tabeli umowy
						$data = $result->fetch(PDO::FETCH_NUM);
						$data = $data[0];
						return $data;
						}
						
						$id = onceQuery($dbo, $query);
						echo $id;
						
						$query2 = "SELECT simple_name FROM it_agreement WHERE it_ida = '$id'";
						$simple_name = onceQuery($dbo, $query2);
						echo '<br>'.$simple_name;

?>