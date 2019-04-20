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
        <title>Terms and condition</title>        
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
                    <h2>Welcome to greatcash.cf</h2>
                    <p>The following terms and conditions will be deemed to have been accepted by the user on usage of the website greatcash.cf. Users are requested to read them carefully before using the content and services of this site.</p>
                    <p>This Agreement is between greatcash.cf and you.</p>

                    <h4>1. Membership</h4>
                    <p>The user should have attained an age of at least 18 years to register with greatcash.cf.
                        By clicking on "I Agree to the Terms and Conditions" check box you confirm your acceptance to the terms of this Agreement and agree to be legally bound by it by registering through your email id or mobile number. While creating an account with greatcash.cf, you are requested to provide your personal details as requested at the time of registration. You are not allowed to create any duplicate accounts which will be subject to cancellation.
                    </p>

                    <p>You also agree not to 'spam' unknown individuals by sending them unwanted emails to solicit their membership at greatcash.cf</p>

                    <h4>2. Use of Information</h4>
                    <p>We reserve the right to disclose your Account, email addresses, usage history, posted materials, IP addresses and traffic information, as may be required to third parties such as affiliate merchants, licensors, independent auditors, consultants or attorneys, government agency or court orders. You also agree to receive communications by way of SMS, e-mails from greatcash.cf relating to services provided through our Website.
                    </p>

                    <h4>3. Our Service</h4>
                    <p>greatcash.cf allows its members to receive cashback on their purchases made through the use of this website. The cashback are paid to the Members for such purchase which are tracked and confirmed by the retailers (“Qualifying Transaction”).</p>

                    <h4>4. Cashback</h4>
                    <p>We receive a commission from the Retailer on completion of the Qualifying Transaction by a Member. We pass this commission as cashback to the Member in their requested mode of receipt. When your purchase transaction is tracked by us, we add your cashback to your greatcash.cf account. Until the sale is confirmed by the Retailer, the added cashback remains in the Pending status. Within a period of 30 days or more, the status of your cashback changes from ‘Pending’ to ‘Confirmed’ on confirmation of sale by the Retailer. No cashback gets paid if purchase is cancelled or amended for whatever reason. Further, in the event that the Retailer feels that the purchase is not genuine for any reason whatsoever and we do not receive any commission for the transaction, the Member will not receive any Cashback.
                    </p>
                    <p>There are circumstances when transactions may not be considered to be a Qualifying Transaction, in which circumstances no cashback gets paid to the Member. The reasons for the transactions not considered to be Qualifying Transaction could be that the Member is not logged-in to greatcash.cf account when making the relevant purchase or the purchase is associated with any fraudulent activity or in breach of this Agreement. 
                    </p>
                    <p>greatcash.cf shall not be responsible if the Retailer fails to report a sale to us or due to some technical or other error we cannot trace a sale to the Member and does not qualify the transaction as a Qualifying Transaction.</p>
                    <p>The Member further acknowledge that Retailers may from time to time at their discretion increase or decrease the commission paid in which case the cashback offer mentioned on our website may be incorrect. The cashback for the Qualifying transaction will be credited in line with the commission reported to us by the Retailer, which may be higher or lower than the advertised rate. We shall not be liable for any difference in the Cashback received by the Member in such cases.
                        We further reserve the right to make balance adjustments or reclaim the cashback, where it has been established that any credit has been made in error which can include transactions which are already confirmed or for which cashback is already paid.
                    </p>

                    <h4>5. Cashback Withdrawal /Your Account and Payments</h4>
                    <p>After the cashback has been confirmed the member can withdraw it after 30 days of successful Qualifying Transaction.You can transfer cash in registered paytm number(*No minimum transaction) .
                    </p>
                    <p>greatcash.cf offers the following mode of withdrawal: Paytm account</p>
                    <p>In the event of Member closing the Account with us or the Member's Account being closed for any reason whatsoever, before taking cashback, we reserve the right to forfeit such cashback. We reserve the right to forfeit any confirmed balance showing on your Account for the reasons provided in this Agreement.</p>

                    <h4>6. No Warranty</h4>
                    <p>6.1. . greatcash.cf makes no warranty that: (a) the website will meet your requirements; (b) the website will be available on an uninterrupted, timely, secure, or error-free basis; (c) the results that may be obtained from the use of the website or any services offered through the website will be accurate or reliable (d) We do not make any representations or guarantees regarding any goods or services offered or provided by Retailers or Suppliers.
                    </p>
                    <p>6.2  All data, statements, content, materials, information, software, products and services provided on the website, are provided on an "as is" and "as available" basis. greatcash.cf expressly disclaims all warranties of any kind, whether express or implied, including, but not limited to, the implied warranties of merchantability and non-infringement.
                    </p>

                    <h4>7. Limitation of Liability</h4>
                    <p>greatcash.cf will be free from any liability, duty or obligation whatsoever in contract, tort or otherwise. In no event will greatcash.cf be liable to any party for any direct, indirect, incidental, special, exemplary, punitive or consequential damages of any type whatsoever related to or arising from this website, or resource/information linked to, referenced or accessed through this website, or for the use or downloading of, or access to, any materials, information, products, or services, including, without limitation, any lost profits, business interruption, lost savings or loss of programs or other data, even if greatcash.cf is expressly advised of the possibility of such damages.
                    </p>
                    <p>You agree that we will not be liable for any costs or damages arising out of a dispute between .You and any Retailer, and you hereby expressly waive any such claim against us and our partners, members, officers, directors, employees, parents, subsidiaries, agents, associates, affiliates and representatives. We do not make any representations or guarantees regarding any goods or services offered or provided by Retailers or Suppliers.</p>

                    <h4>8. Intellectual Property</h4>
                    <p>Except for third party content which are licensed to us, all content present on this website is the exclusive property of greatcash.cf. The software, text, images, graphics, video and audio used on this website belong to greatcash.cf. No material from this website shall be copied, modified, reproduced, republished, uploaded, transmitted, posted or distributed in any form without prior written permission from greatcash.cf. All rights not expressly granted herein are reserved. Unauthorized use of the materials appearing on this website may violate copyright, trademark and other applicable laws, and could result in criminal or civil penalties.
                    </p>
                    <p>However, by uploading any kind of material on greatcash.cf, you also grant us a non -exclusive right to use, reproduce or distribute that material.
                    </p>

                    <h4>9. Our Role</h4>
                    <p>Please note that greatcash.cf gives you a platform by redirecting you to make transactions with third party sellers and retailers and all transactions you make are with them and not greatcash.cf.
                        greatcash.cf cannot provide any assurance or guarantee on quality, authenticity and safety of the goods and services offered by such third party sellers and retailers.
                    </p>

                    <h4>10. Disclaimer</h4>
                    <p>Our Website may lead to other websites, including those operated and maintained by third parties. Our website includes links solely as a convenience to you, and the presence of such a link does not imply a responsibility for the linked website or an endorsement of the linked website, its operator, or its contents.
                    </p>

                    <h4>11. Changes to this Agreement</h4>
                    <p>greatcash.cf reserves the right to alter or delete materials from this website at any time at its discretion. If you do not agree to any modification of this Agreement, You must immediately terminate Your Account.
                    </p>

                    <h4>12. General</h4>
                    <p>This website, howsoever it is accessed, is not and should not constitute an offer for sale in territories where it is not permitted by patent law or any drug laws, rules, regulations etc. in force in those territories.
                    </p>
                    <p>These terms shall be governed by and construed according to the laws of India.
                    </p>
                    <p>If any provision of these Terms of Use is held to be unlawful, void or unenforceable, then such provision shall be severable without affecting the enforceability of all remaining provisions.
                    </p>

                    <h4>13. Contact</h4>
                    <p>All communications under this Agreement are to be sent and received only by email. For any queries regarding our terms and conditions you can reach us on 'Greatcash17@gmail.com'.
                    </p>

                    <h4>14. Keeping this Agreement</h4>
                    <p>greatcash.cf will not file an Individual agreement for each and every user who registers on greatcash.cf. This Agreement can be accessed from our website.
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
