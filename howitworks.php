<?php
session_start();
?>
<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initital-scale=1">       
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Acme'>
        <link rel="stylesheet" href="main.css"> 
        <script src="navjs.js"></script>
        <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
        <title>How it works</title>
    </head>
    <body>      
        <!--header-->
        <div class="header">
            <div>Greatcash</div>
        </div>

        <!--navigation bar-->
        <div class="topnav">
            <a href="index.php" class="hide-low">Home</a>
            <a href="profile.php" class="hide-low">Profile</a>
            <a href="howitworks.php" class="hide-low">How it works</a>
            <a href="withdraw.php" class="hide-low">Transactions</a>
            <?php
            if (!isset($_SESSION['all["user_id"]'])) {
                echo '<a href="signin.php" style="float:right" class="hide-low">Sign in</a>';
            } else {
                echo '<a href="logout.php" style="float:right" class="hide-low">Logout</a>';
            }
            ?>
            <a href="javascript:void(0)" style="text-align: right;background-color:#292929;color:#fff" class="hide" onclick="myFunction()">&#9776;</a>
        </div>

        <!--navigation bar-->
        <div id="demo4" class="topnav hide hide-low" >
            <a href="index.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="howitworks.php">How it works</a>
            <a href="withdraw.php">Transactions</a>
            <?php
            if (!isset($_SESSION['all["user_id"]'])) {
                echo '<a href="signin.php" style="float:right" class="hide-low">Sign in</a>';
            } else {
                echo '<a href="logout.php" style="float:right" class="hide-low">Logout</a>';
            }
            ?>            
        </div>

        <!--Content-->
        <br/>
        <div class="howimg" style="background-image:url('images/how it works.png');"></div>
        <br/>

        <!--Footer-->
        <div class="footer">
            <div class="back_to_top"><a href=#>BACK TO TOP</a></div>
            <br/>
            <a href="profile.php">Profile</a><br/>
            <a href="howitworks.php">How it works</a><br/>
            <a href="withdraw.php">Transactions</a><br/>
            <a href="aboutus.php">About Us</a><br/>
            <a href="contactus.php">Contact Us</a><br/>
            <a href="termscondition.php">Terms & Conditions</a><br/>
            <a href="privacypolicy.php">Privacy Policy</a><br/>
            <?php
            if (!isset($_SESSION['all["user_id"]'])) {
                echo '<a href="signin.php">Sign in</a><br/>';
            } else {
                echo '<a href="logout.php">Logout</a><br/>';
            }
            ?>
            &copy; 2017-<?php echo date("Y"); ?><br/>
        </div>
    </body>
</html>
