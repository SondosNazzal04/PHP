<?php
	echo '<form method="post">';
	echo '<label for="num1">num1:</label>';
	echo '<input type="text" id="num1" name="num1">';
	echo '<label for="num2">num2:</label>';
	echo '<input type="text" id="num2" name="num2">';
	echo '<label for="num3">num3:</label>';
	echo '<input type="text" id="num3" name="num3">';
	echo '<button type="submit">check</button> <br>';
	echo '</form>';

	$num1 = (int) $_POST['num1'];
	$num2 = (int) $_POST['num2'];
	$num3 = (int) $_POST['num3'];

	$max = max($num1, $num2, $num3);

	echo 'max = ', $max;
?>

