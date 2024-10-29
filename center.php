<?php

ob_start();

$API_KEY = "7274696715:AAFzdJ-Jb3a9pItpifMhcf1SaMowckfUkMI";

define('API_KEY',$API_KEY);

if(!is_file("webhook.txt")){
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']); 
file_put_contents("webhook.txt","yes");
}
function bot($method,$datas=[]){
$washli = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$washli";
$washli = file_get_contents($url);
return json_decode($washli);}


date_default_timezone_set('Asia/Aden');

include_once 'regEx.php';
include_once "dbControl.php";

include_once 'info.php';

include_once "telegram_bot.php";

$update = json_decode(file_get_contents('php://input'));


include_once 'variables.php';
include_once 'mybot.php';
exit;



?>