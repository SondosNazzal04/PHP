<?php
	echo '<form method="post">';
	echo '<label for="weather">Weather:</label>';
	echo '<input type="text" id="weather" name="weather">';
	echo '<button type="submit">check</button> <br>';
	echo '</form>';

	$weather = (int) $_POST['weather'];
	if ($weather < 20)
		echo 'It is Winter!';
	else
		echo 'It is Summertime!';
?>
