<?php
	echo '<form method="post">';
	echo '<label for="year">Year:</label>';
	echo '<input type="text" id="year" name="year">';
	echo '<button type="submit">check</button> <br>';
	echo '</form>';

	$year = (int)$_POST["year"];

	if ($year % 400 == 0)
		echo "leap year";
	else if ($year % 4 == 0 && $year % 100 != 0)
		echo "leap year";
	else
		echo "not leap";

?>
