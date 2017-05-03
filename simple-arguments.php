<?php
	
	// Constants
	define("TITLE", "Simple Arguments");
	
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
	
			<h2>Example: <?php echo TITLE; ?></h2>
			
			<div class="sandbox">
				
				<h3>One Argument</h3>
				<?php
					
					function codeNow($languages) {
						echo "We code in $languages<br>";
					}
				
					codeNow("PHP");
					codeNow("JavaScript");
					codeNow("Java");
				?>
				
				<h3>Two Arguments</h3>
				<?php
				
					function multiplyTogether($val1, $val2) {
						 	$product = $val1 * $val2;
							echo "The product of two numbers is: $product";
					}
				
					multiplyTogether(14, 27);
				
				?>
				
			</div><!-- end sandbox -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
	</body>
</html>
