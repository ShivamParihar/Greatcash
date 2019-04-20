<?php

session_start();
if (!isset($_SESSION['all["user_id"]'])) {
    header("Location:signin.php");
} else {
    $user_id=$_SESSION['all["user_id"]'];
    $site_name = $_SESSION['all["site_name"]'];
    $site_id = $_SESSION['all["site_id"]'];
    $site_link = $_SESSION['all["site_link"]'];
    $order_id = 0;
    
    include("connect.php");
                $sql = 'select * from sitelist where site_id="'.$site_id.'"';
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $site_link = $row['site_link'];
                }
    $time = getdate();
    $time = $time['0'];
    $time += 19800;


//getting last order_id
    $sql = "select * from orders";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $order_id = $row['order_id'];
    }
    $order_id++;

    $sql = "insert into orders values('$order_id','$user_id','$site_id','$site_name','$time',0,0,'pending')";
    mysqli_query($con, $sql);
    header("Location:" . $site_link);
}