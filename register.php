<?php
session_start();
if (!isset($_SESSION['error1'])) {
    $_SESSION['error1'] = "";
}
$_SESSION['error']="";
?>
<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initital-scale=1">
        <title>Register</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
        <link rel="stylesheet" href="formcss.css">
    </head>
    <body>       
        <div class="form">
            <p class="webname">Greatcash</p>    
            <form action="registercheck.php" method="post">
                <h3>Register</h3>
                <span class="err"><small><?php echo $_SESSION['error1'] ?></small></span><br/>            
                <small>Paytm Number*</small><br/>
                <input type="text" name="phone" required><br/><br/>
                <small>Name*</small><br/>
                <input type="text" name="user_name" required><br/><br/>
                <small>Password*</small><br/>
                <input type="password" name="password" required><br/><br/>
                <small>Confirm password*</small><br/>
                <input type="password" name="cpassword" required><br/><br/>
                <input type="checkbox" required style="width:20px;">
                <small>I agree to <a href="termscondition.php" style="text-decoration:none;">Terms and Condition</a></small><br/><br/>
                <input class="button" type="submit" value="Create account">
            </form>
            <br/>
            <small>Already a user?</small><br/><a class="button" href="signin.php">Sign in</a>
        </div>

    </body>
</html>
