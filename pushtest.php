<?php

$access_token = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';


// Make a POST Request to Messaging API to reply to sender
$url = 'https://api.line.me/v2/bot/message/push';

$messages = [
  'type' => 'text',
  'text' => 'สวัสดีฮะป้าก้อยน้อย ผมชื่อก๊วยเจ๋งฮะ ผมมาจากดาวอังคาร.'
];

//lovecatjikkeo

$data = [
  'to' => 'rvp1234567890',
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

//echo json_encode($post);

//exit;

echo $result . "\r\n";
