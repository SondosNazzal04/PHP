<?php
	echo '<form method="post">';
	echo '<label for="age">age:</label>';
	echo '<input type="text" id="age" name="age">';
	echo '<button type="submit">check</button> <br>';
	echo '</form>';

	$age = (int) $_POST['age'];
	if ($age < 18)
		echo 'not eligiable';
	else
		echo 'eligiable';
?>
