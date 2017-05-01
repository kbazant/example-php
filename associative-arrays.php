<?php

	// Constants
	define("TITLE", "Associative Arrays");

	// Custom Variables
	$my_name = "Kris";

	// PHP Associative Array 
	$dynamicweb = array (
		acronym => "Hypertext Preprocessor",
		usage => "web development",
		embeddability => "HTML"
	); 

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

		<h3>What is PHP?</h3>

		PHP (recursive acronym for PHP:
		<!--Hypertext Preprocessor--><strong><?php echo $dynamicweb[acronym]; ?>)</strong> is a widely-used open source general-purpose scripting language that is especially suited for <strong><?php echo $dynamicweb[usage]; ?>)</strong> and can be embedded into <strong><?php echo $dynamicweb[embeddability]; ?>)</strong>.

		<!--Copyright info-->
		<small>&copy;<?php echo date('Y');  ?> - <?php echo $my_name; ?></small>

	</body>

	</html>