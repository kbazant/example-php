<?php
	
	// Constants
	define("TITLE", "String Operators");
	
	// Custom Variables
	$my_name = "Kris";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			
			<h2>Example: <?php echo TITLE; ?></h2>
			
			<div class="sandbox">
				
				<h3>Concatenation Operator <code>.</code></h3>
				<?php
					$a = "Hello ";
					$b = "my friends!";
					$c = $a . $b;
				
					echo $c;
				?>
				
				<h3>Concatenating Assignment Operator <code>.=</code></h3>
				<?php
					$a = "Hello ";
					$a .= "my friends";
				
					echo $a;
				?>
				
			</div><!-- end sandbox -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y') ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
	</body>
</html>
