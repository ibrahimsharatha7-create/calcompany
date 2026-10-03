<?php
// https://t.me/Roka334

// Telegram function which you can call
function telegram($msg) {
        global $telegrambot,$telegramchatid;
        $url='https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data=array('chat_id'=>$telegramchatid,'text'=>$msg);
        $options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
        $context=stream_context_create($options);
        $result=file_get_contents($url,false,$context);
        return $result;
}
$telegrambot='8843231477:AAHzAcC1OdUI7jwUXNEwD_Dhz2UiTn0U5Gw'; // TOKEN BOT
  $telegramchatid='8588488896'; // CHAT ID 
?>