<?php
	echo '<form method="post">';
	echo '<label for="num">num:</label>';
	echo '<input type="text" id="num" name="num">';
	echo '<button type="submit">check</button> <br>';
	echo '</form>';

	$num = (int) $_POST['num'];
	if ($num < 0)
		echo 'negative';
	else if ($num > 0)
		echo 'positive';
	else
		echo 'zero';
?>
