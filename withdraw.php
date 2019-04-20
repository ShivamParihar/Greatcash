<?php
session_start();
if (!isset($_SESSION['all["user_id"]'])) {
    header("Location:signin.php");
}
if (!isset($_SESSION['error2'])) {
    $_SESSION['error2'] = "";
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
        <script src="navjs.js"></script>
        <link rel="stylesheet" href="formcss.css">
        <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
        <title>Transactions</title>
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
            <a href="logout.php" style="float:right" class="hide-low">Logout</a>
            <a href="javascript:void(0)" style="text-align: right;background-color:#292929;color:#fff" class="hide" onclick="myFunction()">&#9776;</a>
        </div>

        <!--navigation bar-->
        <div id="demo4" class="topnav hide hide-low" >
            <a href="index.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="howitworks.php">How it works</a>
            <a href="withdraw.php">Transactions</a>
            <a href="logout.php">Logout</a>
        </div>

        <!--Content-->
        <div class="row">
            <div class="content">
                <h2># Withdraw</h2>
                <?php
                $user_id = $_SESSION['all["user_id"]'];
                $phone = $_SESSION['all["phone"]'];

                include("connect.php");
                $sql = "select * from orders where user_id='$user_id'";
                $result = mysqli_query($con, $sql);

                $pay_due30 = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $time = getdate();
                    $time = $time['0'];
                    $time += 19800;
                    $time30 = $row['buy_30'];
                    if ($row['payment_done'] == "pending")
                        if ($time > $time30) {
                            $pay_due30 += $row['you_get'];
                        }
                }
                $_SESSION['all["pay_due30"]'] = $pay_due30;

                echo "<h3>Paytm number - " . $phone . "</h3>";
                echo "<h3>Amount - Rs." . $pay_due30 . "</h3>";
                echo "<a href='request.php' class='button' style='color:#fff;'>Withdraw</a><br/>";
                echo "<span class='err'><small>" . $_SESSION['error2'] . "</small></span><br/>";
                $_SESSION['error2'] = "";

                $sql = "select * from request where user_id='$user_id'";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);

                if ($num > 0) {
                    echo '<h2># Transactions</h2> 
                    <table>
                    <tr>
                        <th>Request id</th>
                        <th>Amount</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>';
                    $sql = 'select * from request where user_id="' . $user_id . '" order by request_id DESC';
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $time = $row['time'];
                        $time = date("h:i:sa    d-m-Y", $time);
                        $request_id = $row['request_id'];
                        $amount = $row['amount'];
                        $status = $row['status'];

                        echo '<tr>';
                        echo '<td>' . $request_id . ' </td>';
                        echo '<td>' . $amount . ' </td>';
                        echo '<td>' . $time . ' </td>';
                        echo '<td>' . $status . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                } else {
                    echo '<h2># No Transactions yet</h2>';
                }
                ?>
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
            <a href="logout.php">Logout</a><br/>
            &copy; 2017-<?php echo date("Y"); ?><br/>
        </div>
    </body>
</html>
