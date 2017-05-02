<?php

	// Constants
	define("TITLE", "If Statements.");

	// Custom Variables
	$my_name = "Kris";

	$a = 20;
	$b = 50;

	$fav_fruit = "orange";

	$programming_language = "Java"; 

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
			
				// If - Else If - Else
				if ($programming_language == "PHP") {
					
					echo "Server-side programming.";	
					
				} elseif ($programming_language == "JavaScript") {
					
					echo "Front and Back-end web development.";
					
				} else { 
					
					echo "general-purpose programming.";
				}
			 
			?>
		</section>

		<br>

		<!--Copyright info-->
		<small>&copy;<?php echo date('Y');  ?> - <?php echo $my_name; ?></small>

	</body>

	</html>