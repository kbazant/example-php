<?php

	// Constants
	define("TITLE", "If Statements.");

	// Custom Variables
	$my_name = "Kris";

	$a = 20;
	$b = 50;

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
			?>
		</section>
		
		<br>

		<!--Copyright info-->
		<small>&copy;<?php echo date('Y');  ?> - <?php echo $my_name; ?></small>

	</body>

	</html>