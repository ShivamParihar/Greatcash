<?php

session_start();

$_SESSION['all["site_name"]'] = $_GET['site_name'];
$_SESSION['all["site_id"]'] = $_GET['site_id'];
$_SESSION['all["site_link"]'] = $_GET['site_link'];
$_SESSION['all["amount"]'] = $_GET['amount'];
$_SESSION['all["main"]'] = $_GET['main'];
$_SESSION['all["str"]'] = $_GET['str'];
//$_SESSION['all["extra"]'] = $_GET['extra'];

header("Location:site.php");