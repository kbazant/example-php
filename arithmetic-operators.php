<?php
	
	// Constants
	define("TITLE", "Arithmetic Operators");
	
	// Custom Variables
	$my_name = "Kris";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- TITLE --></title>
	</head>
	<body>
		<div class="wrapper">

			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Addition <code>+</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = ($a + $b);
				
					echo "$a + $b is equal to $c";
				?>
				
				<h3>Subtraction <code>-</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = ($a - $b);
				
					echo "$a - $b is equal to $c";
				?>
				
				<h3>Multiplication <code>*</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = ($a * $b);
				
					echo "$a &times; $b is equal to $c";
				?>
				
				<h3>Division <code>/</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = ($a / $b);
				
					echo "$a divided by $b is equal to $c";
				?>
				
				<h3>Modulus <code>%</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = ($a % $b);
				
					echo "$a % $b is equal to $c";
				?>
				
			</div><!-- end sandbox -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
	</body>
</html>
