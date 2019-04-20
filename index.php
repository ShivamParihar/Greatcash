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
        <link rel="stylesheet" href="formcss.css">
        <link rel="stylesheet" href="page.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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

        <script>
            function showsearch(str) {
                var text = str;
                text = text.trim();

                document.getElementById("demo").style.display = "flex";
                document.getElementById("demo1").style.display = "block";

                if (text == '') {
                    return;
                } else {
                    text = text.toLowerCase();

                    var xmlr = new XMLHttpRequest();
                    xmlr.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("demo").innerHTML = this.responseText;
                        }
                    };
                    xmlr.open("GET", "gethint.php?q=" + text, true);
                    xmlr.send();

                }
            }
        </script>
        
        <!--Content-->
        <div class="row">
            <div class="content">
                <script>
                    pageSize = 16;

                    $(function () {
                        var pageCount = Math.ceil($(".line-content").size() / pageSize);

                        for (var i = 0; i < pageCount; i++) {
                            if (i == 0)
                                $("#pagin").append('<li><a class="current" href="#">' + (i + 1) + '</a></li>');
                            else
                                $("#pagin").append('<li><a href="#">' + (i + 1) + '</a></li>');
                        }
                        
                        showPage(1);

                        $("#pagin li a").click(function () {
                            $("#pagin li a").removeClass("current");
                            $(this).addClass("current");
                            showPage(parseInt($(this).text()))
                        });
                    })
                    showPage = function (page) {
                        $(".line-content").hide();

                        $(".line-content").each(function (n) {
                            if (n >= pageSize * (page - 1) && n < pageSize * page)
                                $(this).show();
                        });
                    }
                </script>
                
                <!--Search-->                
                <form class="example" action="" style="margin:auto;max-width:300px;">
                    <input type="text" placeholder="Search for site..." onkeyup="showsearch(this.value)">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form><br/><br/>

                <div id="demo" class="flex-container" style="display:none;"></div>

                <br/><h1 id="demo1" style="display:none;font-family:Abel;text-align:center;">#See more sites...</h1><br/>

                <?php
                include("connect.php");
                $sql = 'select * from sitelist';
                $result = mysqli_query($con, $sql);
                echo '<div class="flex-container">';
                while ($row = mysqli_fetch_array($result)) {
                    $site_name = $row['site_name'];
                    $site_id = $row['site_id'];
                    $amount = $row['amount'];
                    $main = $row['main'];
                    $site_link = $row['site_link'];
                    $image_link = $row['image_link'];
                    //$extra = $row['extra'];

                    $str = '';
                    if($main==1){
                        $str="Get upto ".$amount."% cashback";
                    }else if($main==0){
                        $str="Rs. ".$amount." / install";
                    }else{
                        $str="Get upto Rs.".$amount." cashback";
                    }
                    //echo '<div class="icon_image"  style="background-image:url(\''.$image_link.'\');"></div>';
                    //echo '<div class="icon_image"  style="background-color:#cce0ff;"></div>';
                    echo '<div class="line-content">';
                    echo '<div class="icon_image"><img src="'.$image_link.'" alt="Updating..."></div>';
                    echo '<div class="body_image">' . $site_name . '<br/>' . $str . ' <br/>'
                    . '<div class="add_button"><a href="site1.php?site_id=' . $site_id .
                    '&site_name=' . $site_name . '&site_link=' . $site_link .
                    '&amount=' . $amount . '&str=' . $str . '&main='.$main.'">Go</a></div></div>';
                    echo '</div>';
                }
                echo "</div>";
                ?>
                <ul id="pagin"></ul>
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
