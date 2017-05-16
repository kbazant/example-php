<?php
    define("TITLE" | "Contact Us | Fine Dining Restaurant");
    include('includes/header.php');
?>

    <div id="contact">

        <hr>

        <h1>Get in touch with us</h1>

        <?php 

            // Check for header injections
            function has_header_injection($str) {
                return preg_match("/[\r\n]/", $str);
            }

            if (isset($_POST['contact_submit'])) {

              $name = trim($_POST['name']);      
              $email = trim($_POST['email']);  
              $msg = $_POST['message'];    

              // Check to see if $name or $email have header injections
              if (has_header_injection($name) || has_header_injection($email)) {
                  die(); //If true, kill the script
              }

              if (!$name || !$email || !$msg) {
                    echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
                    exit;
              }

            }
        ?>

        <form method="post" action="" id="contact-form">

            <label for="name">Your name</label>
            <input type="text" id="name" name="name">

            <label for="email">Your email</label>
            <input type="email" id="email" name="email">

            <label for="message">Your message </label>
            <textarea id="message" name="message"></textarea>

            <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
            <label for="subscribe">Subscribe to newsletter</label>

            <input type="submit" class="button next" name="contact_submit" value="Send Message">

        </form>

    </div>
    <!-- contact -->

    <hr>

    <?php include('includes/footer.php'); ?>