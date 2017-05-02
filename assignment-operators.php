<?php
	
	// Constants
 	define("TITLE", "Assignment Operators");
	
	// Custom Variables
	$my_name = "Kris";


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php TITLE; ?></title>
	</head>
	<body>
		<div class="wrapper">
			
			<h2>Example: <?php TITLE; ?></h2>
			
			<div class="sandbox">
				
				<h3>Addition Assignment Operator <code>+=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a += $b;
				
					echo $a; 
				?>
				
				<h3>Subtraction Assignment Operator <code>-=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a -= $b;
				
					echo $a;
				?>
				
				<h3>Multiplication Assignment Operator <code>*=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a *= $b;
				
					echo $a;
				?>
				
				<h3>Division Assignment Operator <code>/=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a /= $b;
				
					echo $a;
				?>
				
				<h3>Modulus Assignment Operator <code>%=</code></h3>
				<?php
					$a = 30;
					$b = 50;
					$a %= $b;
				
					echo $a;
				?>
				
				<h3>Concatenation Assignment Operator <code>.=</code></h3>
				<?php
					$a = "Hello ";
					$b = "my friends";
					$a .= $b;
				
					echo $a;
				?>
				
			</div><!-- end sandbox -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
	</body>
</html>
