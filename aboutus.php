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
        <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
        <script src="navjs.js"></script>
        <title>About Us</title>
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
        <div class="row">
            <div class="content">
                <div class="card">
                    <h2>About us</h2>
                    <p>greatcash.cf is an ecommerce platform designed to enhance your shopping experience. At greatcash.cf you find latest coupons, deals, offers and to top that you earn cashback every time you shop through us. That’s why we call ourselves your online piggy bank. We understand your needs and bring to you a plethora of websites to choose from.And you can transfer the cashback to your Paytm account because it’s real money! So what are you waiting for? Sign up today and start shopping.</p>

                    <h4># Why join greatcash.cf?</h4>
                    <p><strong>1) Free membership</strong>: We don’t charge you to become a member.</p>
                    <p><strong>2) Earn extra CASHBACK</strong>: Earn extra CASHBACK on all shopping orders.</p>
                    <p><strong>3) Easy to use</strong>: All you have to do is sign up with us and we will take care of the rest. We provide you with the list of websites, the ongoing offers, deals and coupons. Visit through us at any of the partner websites and just shop through us like any regular shopping and we provide you extra cashbacks!</p>
                    <p><strong>4) Customer service</strong>: We focus on providing an excellent service to our customers. Just in case your shopping is not tracked in the first instance, you can reach out to our customer support service and we will aim to resolve your query within 24 hours.</p>

                    <h4># If you are wondering why would we pay you for shopping?</h4>
                    <p>It’s simple. Every time you shop through us on our partner websites, they give us a commission on your shopping amount and we just share a part of this commission with you. Win-Win.</p>

                </div>
            </div>
        </div>

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
