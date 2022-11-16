<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	function generate_table() {
		echo "<table id='multiplicationTable'>\n";
		echo "<tr class='headerRow'>\n";
		echo "<td class='headerCell'></td>\n";
		for ($col = 1; $col <= 100; $col++) {
			echo "<td class='headerCell'>".$col."</td>\n";
		}
		echo "</tr>\n";
		for ($row = 1; $row <= 100; $row++) {
			echo "<tr class='tableRow'>\n";
			echo "<td class='headerCell'>".$row."</td>";
			for ($col = 1; $col <= 100; $col++) {
				$value = $row * $col;
				echo "<td class='dataCell'>".$value."</td>\n";
			}
			echo "</tr>\n";
		}
		echo "</table>\n";
	}
	generate_table()
?>
