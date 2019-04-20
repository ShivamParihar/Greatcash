<?php

session_start();

function text_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pro_link = text_input($_POST["pro_link"]);
}
//http://www.flipkart.com/livon-hair-serum/p/itmf8hffvaayzhwf?pid=HSMEMWKET3P2MXFA&affid=shivam63
//http://dl.flipkart.com/dl/livon-hair-serum/p/itmf8hffvaayzhwf?pid=HSMEMWKET3P2MXFA&affid=shivam63
//http://dl.flipkart.com/dl/vivo-y81-gold-32-gb/p/itmf7tznggvz5yfy?pid=MOBF7TZNPA4VPU4E&cmpid=product.share.pp

$key1 = stripos($pro_link, "http://dl.flipkart.com/dl/");
$pro_link1 = strrev($pro_link);
$key2 = stripos($pro_link1, "pp.erahs.tcudorp=dipmc");

if ($key1 === 0 && $key2 === 0) {
    $pro_link = str_replace("cmpid=product.share.pp", "affid=shivam63", $pro_link);
    $pro_link = str_replace("dl.flipkart.com/dl", "www.flipkart.com", $pro_link);

    $pro_name = str_replace("http://www.flipkart.com/", "", $pro_link);
    $array = explode("/", $pro_name);
    $pro_name = $array[0];
    $pro_name = str_replace("-", " ", $pro_name);

    $_SESSION['all["pro_link"]'] = $pro_link;
    $_SESSION['all["pro_name"]'] = $pro_name;
} else {
    $key3 = stripos($pro_link, "https://www.flipkart.com/");
    if ($key3 === 0) {
        $key5 = stripos($pro_link, "lid=");
        $key5;
        $pro_link=substr_replace($pro_link,"",$key5,30);        
        $pro_link=str_replace("amp;",'',$pro_link);
        
        $key4 = stripos($pro_link, "?pid=");        
        $key4 += 21;
        $pro_link = substr($pro_link, 0, $key4);
        
        $id = '&affid=shivam63';
        $pro_link .= $id;

        $pro_name = str_replace("https://www.flipkart.com/", "", $pro_link);
        $array = explode("/", $pro_name);
        $pro_name = $array[0];
        $pro_name = str_replace("-", " ", $pro_name);

        $_SESSION['all["pro_link"]'] = $pro_link;
        $_SESSION['all["pro_name"]'] = $pro_name;
    } else {
        $_SESSION['error3'] = "*invalid url";
    }
}
header("Location:index.php");
