<?php
	
	// Constants
	define("TITLE", "Functions");
	
	// Custom Variables
	$my_name	= "Kris";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
	</head>
	<body>
		<div class="wrapper">
			
			<h2>Example: Functions</h2>
			
			<div class="sandbox">
				
				<h3>Using <code>sort()</code></h3>
				<?php
					
					$programming_languages = array ("JavaScript", "PHP", "Java");

					//sort in alphabetical order
					sort($programming_languages);
				
					foreach ($programming_languages as $web_development) {
						
						echo "$web_development<br>";
					
					} 	
				?>
				
				<h3>Using <code>rsort()</code></h3>
				<?php
					
					rsort($programmming_languages);
				
					foreach($programming_languages as $web_development) {
						echo "$web_development <br>";
					}
					
				?>
				
				<h3>Using <code>strtolower()</code></h3>
				<?php
					
					$text = "Best Programming LANGUAGES.";
				
					$text = strtolower($text);
				
					echo $text;
					
				?>
				
				<h3>Using <code>sha1()</code></h3>
				<?php
					
					$password = "MyPassword";
					echo "Before: $password <br>";
				
					$password = sha1($password);
					echo "After: $password";
					
				?>
				
			</div><!-- end sandbox -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
	
	</body>
</html>
