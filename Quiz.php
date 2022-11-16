<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	function grade_quiz() {
		$q1_answer = $_POST["Q1"];
		$q2_answer = $_POST["Q2"];
		$q3_answer = $_POST["Q3"];
		$q4_answer = $_POST["Q4"];
		$q5_answer = $_POST["Q5"];
		$correct = 0;
		if ($q1_answer == "Rome") { $correct += 1; }
		if ($q2_answer == "National Aeronautics and Space Administration") { $correct += 1; }
		if ($q3_answer == "Ronald Reagan") { $correct += 1; }
		if ($q4_answer == "Joseph Heller") { $correct += 1; }
		if ($q5_answer == "6") { $correct += 1; }

		echo "<h4>Question 1: In what city is the Colosseum located?</h4>\n";
		echo "<p>You answered: ".$q1_answer."</p>\n";
		echo "<p>Correct answer: Rome</p><br>\n";
		echo "<h4>Question 2: What does NASA stand for?</h4>\n";
		echo "<p>You answered: ".$q2_answer."</p>\n";
		echo "<p>Correct answer: National Aeronautics and Space Administration</p><br>\n";
		echo "<h4>Question 3: Who was the 40th U.S. President?</h4>\n";
		echo "<p>You answered: ".$q3_answer."</p>\n";
		echo "<p>Correct answer: Ronald Reagan</p><br>\n";
		echo "<h4>Question 4: Who wrote Catch-22</h4>\n";
		echo "<p>You answered: ".$q4_answer."</p>\n";
		echo "<p>Correct answer: Joseph Heller</p><br>\n";
		echo "<h4>Question 5: How many sides does a hexagon have?</h4>\n";
		echo "<p>You answered: ".$q5_answer."</p>\n";
		echo "<p>Correct answer: 6</p><br>\n";
		echo "<p>You answered ".$correct." questions correctly.</p>\n";
		$score = ($correct / 5) * 100;
		echo "<h4>Score: ".$score."%</h4>\n";
	}
	grade_quiz()
?>
