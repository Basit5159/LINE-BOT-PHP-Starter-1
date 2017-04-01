<?php

$access_token = '/dUUN+FIWIpMC8TGU6wJJ/t2UJ/Ryyoa0IsymMHrvck/iXZS26T2UoqxYXM++wWMaCpn1TNMuh6P601LNsW0qLXnxmZd/IRfZLDxYX0lS+agOAct7dVEehkfDYSwX+PIyBxZ5kvICewECirBHQVo0QdB04t89/1O/w1cDnyilFU=';


// Make a POST Request to Messaging API to reply to sender
$url = 'POST https://api.line.me/v2/bot/message/push';

$messages = [
  'type' => 'text',
  'text' => 'Hello K@YNoy I am Line Bot.'
];
      
$data = [
  'to' => 'U77cc4bd9b81e52cd18c1c8c0d363f26d',
  'messages' => [$messages],
];
$post = json_encode($data);
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result . "\r\n";
