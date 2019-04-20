<?php
session_start();

if (!isset($_SESSION['all["site_id"]'])) {
    $_SESSION['all["site_name"]'] = 'Amazon';
    $_SESSION['all["site_id"]'] = 2;
    $_SESSION['all["site_link"]'] = 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.amazon.in%2F';
    $_SESSION['all["amount"]'] = 9;
    $_SESSION['all["main"]'] = 1;
    $_SESSION['all["str"]'] = 'Get upto 9% cashback';
    //$_SESSION['all["extra"]'] = '';
}
?> 
<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initital-scale=1">       
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Acme'>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="formcss.css">
        <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="navjs.js"></script>
        <title>Home</title>
        <style>
            body{
             margin-top:-50px;   
            }
            @media screen and (max-width: 479px){
                body{
                    margin-top:0;
                }
            }
        </style>
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
                    <?php
                    $site_name = $_SESSION['all["site_name"]'];
                    $site_id = $_SESSION['all["site_id"]'];
                    $site_link = $_SESSION['all["site_link"]'];
                    $amount = $_SESSION['all["amount"]'];
                    $main = $_SESSION['all["main"]'];
                    $str = $_SESSION['all["str"]'];
                    //$extra = $_SESSION['all["extra"]'];
                    $sitedata='';
                    if ($main == 0) {
                        $str1 = 'Install now';
                    } else {
                        $str1 = 'Shop now';
                    }
                    //siteinfo
                    $xml = simplexml_load_file("siteinfo.xml") or die("Error: Cannot create object");
                    $sitedata = $xml->site[0]->name;
                    foreach ($xml->children() as $siteinfo) {
                        $site_name1 = $siteinfo->name;
                        if($site_name1==$site_name){
                            $sitedata=$siteinfo->desc;
                        }
                    }

                    echo '<h1>' . $site_name . '<h1/>';
                    echo '<h4>' . $sitedata . '</h4>';
                    echo '<h3>' . $str . '</h3>';
                    //echo '<h3>' . $extra . '</h3>';
                    echo '<a href="setorder.php" class="button" style="color:#fff;">' . $str1 . '</a><br/>';
                    ?>
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
        <script type='text/javascript'>
    var pubID = '43157CL38922';

    (function(d, t) {
    var s = document.createElement('script');s.type = 'text/javascript';
    s.async = true;s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/')  + 'cuelinksv1.js';
    document.getElementsByTagName('body')[0].appendChild(s);
    }());
</script>
                
    </body>
</html>
