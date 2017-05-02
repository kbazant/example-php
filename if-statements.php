<?php

	// Constants
	define("TITLE", "If Statements.");

	// Custom Variables
	$my_name = "Kris";

	$a = 20;
	$b = 50;

	$fav_fruit = "orange";

?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>Example PHP Website
			<?php echo TITLE; ?>
		</title>
	</head>

	<body>

		<h1>Topic:
			<?php echo TITLE ?>
		</h1>

		<section>
			<?php
				if ($a < $b) {
					echo "Yes, $a is less than $b.";
				}
				//fruit
				if ($fav_fruit == "pineapple") {
					echo "Pineapple is the best!";
				} else {
					echo "So you like oranges...";
				}
			?>
			
		</section>
		
		<br>

		<!--Copyright info-->
		<small>&copy;<?php echo date('Y');  ?> - <?php echo $my_name; ?></small>

	</body>

	</html>