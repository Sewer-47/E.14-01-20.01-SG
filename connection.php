<?php
	$database = "sklep";
	$password = "";
	$user = "root";
	$host = "localhost";

function fillTable() {
	global $database, $password, $user, $host;

	$connection = @new mysqli($host, $user, $password, $database);
	if ($connection -> connect_errno != 0) {
		echo "Blad polaczenia z db";
		return;
	}

	$sql_request = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000";
	$sql_result = $connection -> query($sql_request);

	while ($row = mysqli_fetch_array($sql_result)) {
		$id = $row['id'];
		$name = $row['nazwa'];
		$desc = $row['opis'];
		$price = $row['cena'];

		$table = "
			<tr>
			<td>$id</td>
			<td>$name</td>
			<td>$desc</td>
			<td>$price</td>
			</tr>";
		echo $table;
	}

	$connection -> close();
}

?>