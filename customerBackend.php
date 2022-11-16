<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	echo "<link href='style.css' rel='stylesheet' type='text/css'/>\n";

	function process_order() {
		echo "<div class='navbar'>\n";
		echo "<a href='index.html'>Index Page</a>\n";
		echo "<a href='Password Validator.html'>Password Validator</a>\n";
		echo "<a href='Slide Show.html'>Slide Show</a>\n";
		echo "<a href='Personal Profile.html'>Personal Profile</a>\n";
		echo "<a href='CSS Manipulation.html'>CSS Manipulation</a>\n";
		echo "<a href='Multiplication Table.html'>Multiplication Table</a>\n";
		echo "<a href='Quiz.html'>Quiz</a>\n";
		echo "<a href='customerFrontend.html'>Web Store</a>\n";
		echo "</div>\n";
		echo "<div class='mainBody'>\n";

		$username = $_POST["username"];
		$password = $_POST["password"];
		$mice_amount = $_POST["mouse"];
		$mice_cost = (20 * $mice_amount);
		$keyboard_amount = $_POST["keyboard"];
		$keyboard_cost = (40 * $mice_amount);
		$headphone_amount = $_POST["headphones"];
		$headphone_cost = (30 * $mice_amount);
		$shipping = $_POST["shipping"];
		$shipping_cost = 0;

		if ($shipping == "Free") {
			$shipping_cost = 0;
		} elseif ($shipping == "Over Night") {
			$shipping_cost = 50;
		} elseif ($shipping == "Three Day") {
			$shipping_cost = 5;
		}

		$total_cost = $mice_cost + $keyboard_cost + $headphone_cost + $shipping_cost;

		echo "<h4>Welcome, ".$username."!</h4>\n";
		echo "<p>Your password: ".$password."</p>\n";
		echo "<table>\n";

		echo "<tr>\n";
		echo "<td class='greenCell'></td><td class='greenCell'>Quantity</td><td class='greenCell'>Cost Per Item</td><td class='greenCell'>Sub Total</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td class='greenCell'>Custom Mouse</td><td class='blueCell'>".$mice_amount."</td><td class='blueCell'>$20.00</td><td class='blueCell'>$".$mice_cost."</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td class='greenCell'>Custom Keyboard</td><td class='blueCell'>".$keyboard_amount."</td><td class='blueCell'>$30.00</td><td class='blueCell'>$".$keyboard_cost."</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td class='greenCell'>Custom Headhpones</td><td class='blueCell'>".$headphone_amount."</td><td class='blueCell'>$40.00</td><td class='blueCell'>$".$headphone_cost."</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td class='greenCell'>Shipping</td><td class='blueCell'>$shipping</td><td class='blueCell'>$".$shipping_cost."</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td class='greenCell'>Total Cost</td><td class='greenCell'>$".$total_cost."</td>\n";
		echo "</tr>\n";


		echo "</table>\n";
		echo "</div>\n";
	}
	process_order()
?>
