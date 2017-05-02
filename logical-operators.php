<?php
	
	// Constants
	define("TITLE", "Logical Operators");
	
	// Custom Variables
	$my_name = "Kris";

	$username = "joedoe";
	$password = "worstpasswordever";

	$cartTotal = 19.99;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- TITLE --></title>
	</head>
	<body>
		<div class="wrapper">
			
			<hr>
			
			<h2>Examples: Logical Operators</h2>
			
			<div class="sandbox">
				
				<h3>And <code>and</code></h3>
				<?php
					if ($username == "joedoe" and $password = "worstpasswordever" ) {
						echo "<p>Login info is incorrect.</p>";
					}
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					if ($cartTotal > 150 or $couponCode == "Discount Please!") {
						echo "You get a discount!";
					} else {
						echo "You don't get a discount!";
					}
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					
					$ownDog = true;
				
					if (!$ownDog) {
						echo "You do not own a dog.";
					} else {
						echo "You own a dog.";
					}
					
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					if ($username == "joedoe" && $password = "worstpasswordever") {
						echo "Login info is correct!";
					} else {
						echo "Wrong login info!";
					}
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					if ($cartTotal > 15 || $couponCode == "DiscountPlease" ) {
						echo "You get a discount";
					} else {
						echo "You don't get a discount!";
					}
				?>
				
			</div><!-- end sandbox -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
	</body>
</html>
