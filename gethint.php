<?php

session_start();

$text = $_GET['q'];

include("connect.php");
$sendlist = '';

$sql = "select * from sitelist where site_name like '%$text%'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) < 0) {
    
} else {
    while ($row = mysqli_fetch_array($result)) {
        $site_name = $row['site_name'];
        $site_id= $row['site_id'];
        $amount = $row['amount'];
        $main = $row['main'];
        $site_link = $row['site_link'];
        $image_link = $row['image_link'];
        $extra = $row['extra'];
        
        $str='';
        if($main==1){
            $str="Get upto ".$amount."% cashback";
        }else if($main==0){
            $str="Rs. ".$amount." / install";
        }else{
            $str="Get upto Rs.".$amount." cashback";
        }

        $sendlist .= '<div><div class="icon_image"><img src="'.$image_link.'" alt="Updating..."></div><div class="body_image">' . $site_name .
                '<br/>' . $str . ' <br/><div class="add_button"><a href="site1.php?site_id=' .$site_id.'&site_name='.$site_name 
                . '&site_link='.$site_link.'&amount='.$amount.'&str='.$str.'&extra='.$extra.'">Go</a></div></div></div>';
    }
}

echo $sendlist;
?>

