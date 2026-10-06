<?php
	echo '<form method="post">';
	echo '<label for="num">num:</label>';
	echo '<input type="text" id="num" name="num">';
	echo '<button type="submit">check</button> <br>';
	echo '</form>';

	$num = (int) $_POST['num'];

	$total = 0;
	if ($num <= 50)
		$total += $num * 2.5;
	else if ($num <= 150 && $num > 50)
	{
		$total += 50 * 2.5;
		$total += ($num - 50) * 5;
	}
	else if ($num <= 250 && $num > 100)
	{
		$total += 50 * 2.5;
		$total += 100 * 5;
		$total += ($num - 150) * 6.2;
	}
	else if ($num > 250)
	{
		$total += 50 * 2.5;
		$total += 100 * 5;
		$total += 100 * 6.2;
		$total += ($num - 250) * 7.5;
	}

	echo "total = ", $total;
?>

