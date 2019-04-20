<?php

session_start();
$phone = '';
$password = '';

function text_input($data) {
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = text_input($_POST["phone"]);
    $password = text_input($_POST["password"]);
}
if ((!ctype_digit($phone)) || (!(strlen($phone) == 10))) {
    $_SESSION['error'] = "*Enter a valid mobile number";
    header("Location:signin.php");
} else {
    include("connect.php");

    $sql = "select * from login_info where phone='$phone' and password='$password'";
    $result = mysqli_query($con, $sql);

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['all["phone"]'] = $phone;
        $_SESSION['all["user_name"]'] = $row['user_name'];
        $_SESSION['all["user_id"]'] = $row['user_id'];
        $_SESSION['all["pay_due"]'] = 0;
        $_SESSION['all["pay_out"]'] = $row['pay_out'];
        $_SESSION['all["pay_due30"]'] = 0;
        $_SESSION['all["pro_name"]'] = "";
        $_SESSION['all["pro_link"]'] = "";

        header("Location:index.php");
    } else {
        $_SESSION['error'] = "*Phone number or password is invalid";
        header("Location:signin.php");
    }
    $con->close();
}
?>
