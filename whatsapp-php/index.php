<?php
// require_once ('vendor/autoload.php'); // if you use Composer
require_once('whatsapp-php/ultramsg.class.php'); // if you download ultramsg.class.php

$ultramsg_token="xbg4bo6d2vfwtmoi"; // Ultramsg.com token
$instance_id="instance82131"; // Ultramsg.com instance id
$client = new UltraMsg\WhatsAppApi($ultramsg_token,$instance_id);

$to="9673466829"; 
$body="Hello world"; 
$api=$client->sendChatMessage($to,$body);
print_r($api);

?>