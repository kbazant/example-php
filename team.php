<?php
    define("TITLE", "Team | Fine Dining Restaurant");
    include('includes/header.php');
?>

    <div id="team-members" class="cf">

        <h1>Our Team</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quidem molestias maxime, impedit nam dicta, autem
            deserunt earum doloremque non blanditiis optio sequi aliquid est nihil perspiciatis praesentium voluptatibus
            sit.</p>

        <hr>

        <?php 
            foreach ($teamMembers as $member) {
        ?>

            <div class="member">
                <img src="images/<?php echo $member[img]; ?>.jpg" alt="<?php echo $member[name]; ?>">
                <h2><?php echo $member[name]; ?></h2>
                <p><?php echo $member[bio]; ?></p>
            </div><!-- member -->

        <?php 
            }
        ?>

    </div>
    <!-- team members -->

    <?php
    include('includes/footer.php');
?>