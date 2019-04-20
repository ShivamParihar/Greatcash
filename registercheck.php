<?php

session_start();

$phone='';
$user_name = '';
$password = '';
$cpassword = '';
$user_id = '';

function text_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = text_input($_POST["phone"]);
    $user_name = text_input($_POST["user_name"]);
    $password = text_input($_POST["password"]);
    $cpassword = text_input($_POST["cpassword"]);
}

if ((ctype_digit($phone)) && (strlen($phone) == 10)) {
    if ($password != $cpassword) {
        $_SESSION['error1'] = "*Password do not Match";
        header("Location:register.php");
    } else {
        include("connect.php");

        $sql = "select * from login_info where phone='$phone'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            $_SESSION['error1'] = "*Mobile number is already registered";
            header("Location:register.php");
        } else {
            
            //to get last user_id
            $sql = "select* from login_info";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $user_id = $row['user_id'];
            }
            $user_id++;
            
            
            $sql1 = "insert into login_info values('$user_id','$phone','$user_name','$password',0)";
            mysqli_query($con, $sql1);
            header('Location:registersuccess.php');
        }
        $con->close();
    }
} else {
    $_SESSION['error1'] = "*Invalid Mobile Number";
    header("Location:register.php");
}
?>
