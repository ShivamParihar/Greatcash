<?php

session_start();
$_SESSION['error2'] = "";
$pay_due = $_SESSION['all["pay_due"]'];
$user_id = $_SESSION['all["user_id"]'];
$phone = $_SESSION['all["phone"]'];
$request_id=0;

$time = getdate();
$time = $time['0'];
$time += 19800;

if ($pay_due != 0) {
    include("connect.php");
    $sql = "select * from request where user_id='$user_id'";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $request_id = $row['request_id'];
    }
    $request_id++;

    $sql = "insert into request values('$request_id','$user_id','$phone','$time','$pay_due','pending')";
    mysqli_query($con, $sql);

    $_SESSION['all["pay_due"]'] = 0;

    $sql = 'update orders set payment_done="done" where user_id=' . $user_id . ' and you_get>0';
    mysqli_query($con, $sql);
} else {
    $_SESSION['error2'] = "*no cashback to withdraw";
}
header("Location:withdraw.php");
