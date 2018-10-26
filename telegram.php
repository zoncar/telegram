<?php
$token="789675657:AAEidcOmHZaqfTvzs6KEN-KdGGJmFMeMdx4";
$website="https://api.telegram.org/bot".$token;

//$getme=file_get_contents($website."/getme");
//$getme_array = json_decode($getme,TRUE);

//$updates=file_get_contents($website."/getupdates");
//$updates_array = json_decode($updates,TRUE);

$input = file_get_contents("php://input");
$update = json_decode($webhook,TRUE);

$text = $update["message"]["text"];
$chatid = $update["message"]["chat"]["id"];


//sendMessage($chatid,$text);

function sendMessage($idchat,$message){
	global $website;
	$url = $website."/sendMessage?chat_id=".$idchat."&text=".urlencode($message);
    $get = file_get_contents($url);
	
	
	//$url = $GLOBALS[website]."/sendMessage?chat_id=".$idchat."&text=".urlencode($message);
	//file_get_contents($url);
}
if ($text == "/start"){
	sendMessage($chatid,"avviato");
}else {
	sendMessage($chatid,"ciao sto rispondendo");
}


?>