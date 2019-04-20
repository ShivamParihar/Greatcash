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
        <title>Privacy Policy</title>
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
                    <h2>Privacy Policy</h2>
                    <p>This Privacy Policy (“Policy”) describes the policies and procedures 
                        on the collection, use, disclosure and protection of your information 
                        when you use our website located at greatcash.cf</p>
                    <h5>YOUR CONSENT</h5>
                    <p>By using this Platform and the Services, you agree and consent to the collection, transfer, use, storage, disclosure and sharing of your information as described and collected by us in accordance with this Policy.  If you do not agree with the Policy, please do not use or access this Platform.
                    </p>

                    <h5>POLICY CHANGES</h5>
                    <p>We may occasionally update this Policy and such changes will be posted on this page. If we make any significant changes to this Policy we will endeavour to provide you with reasonable notice of such changes, we will obtain your consent.</p>

                    <h5>INFORMATION WE COLLECT FROM YOU</h5>
                    <p>We will collect and process the following information about you:</p>
                    <p># <strong>Information you give us</strong> - This includes information submitted when you.</p>
                    <p>* Create or update your account, which may include your name,email, phone number, login name and password, address, payment information, date of birth and profile picture. </p>
                    <p>* Provide content to us, which may include reviews, ordering details and history, favourite vendors, special merchant requests, contact information of people you refer to us and other information you provide on the  Platform (“Your Content”).
                    </p>
                    <p>*Use our Services, we may collect and store information about you to process your requests and automatically complete forms for future transactions, including (but not limited to) your phone number, address, email, billing information.
                    </p>

                    <h5>Use of Third Parties</h5>
                    <p>We have third party ads and links on our websites. This might lead to the third parties collecting information about your visits to our website, and your interaction with the products and services provided on our website. They might use this information to market other goods and services.We do not permit third parties to sell or share your personally identifiable information as part of this process.</p>

                    <h5>Links to Other websites</h5>
                    <p>Our Site includes links to other websites whose privacy practices may differ from those of greatcash.cf. If you submit personal information to any of those sites, your information is governed by their privacy statements. We encourage you to carefully read the privacy statement of any website you visit.</p>

                    <p># <strong>Information we collect about you </strong>With regard to each of your visits to the Platform, we will automatically collect and analyse the following demographic and other information:
                    </p>
                    <p>* When you communicate with us (via email, phone, through the Platform or otherwise), we may maintain a record of your communication</p>
                    <p>* <strong>Location information</strong>: Depending on the Services that you use, and your app settings or device permissions, we may collect your real time information, or approximate location information as determined through data such as GPS, IP address.</p>
                    <p>* <strong>Transaction Information</strong>: We collect transaction details related to your use of our Services, and information about your activity on the Services, including the full Uniform Resource Locators (URL), the type of Services you requested or provided, comments, domain names, search results selected, number of clicks, information and pages viewed and searched for, the order of those pages, length of your visit to our Services, the date and time you used the Services, amount charged, details regarding application of promotional code, methods used to browse away from the page and any phone number used to call our customer service number and other related transaction details;
                    </p>
                    <p>* <strong>Device Information</strong>: We may collect information about the devices you use to access our Services, including the hardware models, operating systems and versions, software, file names and versions, preferred languages, unique device identifiers, advertising identifiers, serial numbers, device motion information and mobile network information. Analytics companies may use mobile device IDs to track your usage of the Platform;
                    </p>
                    <h2>Contact us</h2>
                    <p>If you have any queries relating to the processing usage of information provided by you or Privacy Policy, you may email at greatcash17@gmail.com.
                    </p>

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
