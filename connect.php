<?php

try {
    $con = mysqli_connect("localhost", "u962156597_aashi", "tanusha1517", "u962156597_bonus");
    
} catch (Exception $err) {
    echo $err->getMessage();
}
//$con = mysqli_connect("localhost", "root", "", "bonus");
?>