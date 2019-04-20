<?php
session_start();
if (!isset($_SESSION['all["user_id"]'])) {
    header("Location:signin.php");
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
        <title>Profile</title>
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
                <h2># Your profile</h2>
                <?php
                $user_id = $_SESSION['all["user_id"]'];
                $user_name = $_SESSION['all["user_name"]'];
                $phone = $_SESSION['all["phone"]'];
                $pay_out = $_SESSION['all["pay_out"]'];

                include("connect.php");
                $sql = "select * from orders where user_id='$user_id'";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);

                $pay_due = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['payment_done'] == "pending")
                        $pay_due += $row['you_get'];
                }
                $_SESSION['all["pay_due"]'] = $pay_due;

                echo '<h3>Name - ' . $user_name . '</h3>';
                echo '<h3>Phone - ' . $phone . '</h3>';
                echo '<h3>Cashback withdrawal - Rs.' . $pay_out . '</h3>';
                echo '<h3>Cashback in your hand(*ready to withdraw) - Rs.' . $pay_due . '        </h3>';
                echo '<a href="withdraw.php" class="button" style="color:#fff;">Withdraw now</a>';
                echo '<h3>Pending cashback - Cash in updating state </h3>';

                if ($num > 0) {
                    echo '<h2># Your orders</h2> 
                    <table>
                    <tr>
                        <th>Order id</th>
                        <th>Name</th>
                        <th>Time</th>
                        <th>Price</th>
                        <th>Cashback</th>
                        <th>Payment</th>
                    </tr>';
                    $sql = 'select * from orders where user_id="' . $user_id . '" order by order_id DESC';
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $buy_time = $row['buy_time'];
                        $buy_time = date("h:i:sa    d-m-Y", $buy_time);
                        $order_id = $row['order_id'];
                        $total_price = $row['total_price'];
                        $site_name = $row['site_name'];
                        $you_get = $row['you_get'];
                        if ($total_price == 0) {
                            $total_price = "updating..";
                        }
                        if ($you_get == 0) {
                            $you_get = "updating..";
                        }
                        $payment_done = $row['payment_done'];

                        echo '<tr>';
                        echo '<td>' . $order_id . ' </td>';
                        echo '<td>' . $site_name . ' </td>';
                        echo '<td>' . $buy_time . ' </td>';
                        echo '<td>' . $total_price . '</td>';
                        echo '<td>' . $you_get . '</td>';
                        echo '<td>' . $payment_done . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                } else {
                    echo '<h2># No orders yet</h2>';
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
