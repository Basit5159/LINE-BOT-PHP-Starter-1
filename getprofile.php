<?php
$access_token = '/dUUN+FIWIpMC8TGU6wJJ/t2UJ/Ryyoa0IsymMHrvck/iXZS26T2UoqxYXM++wWMaCpn1TNMuh6P601LNsW0qLXnxmZd/IRfZLDxYX0lS+agOAct7dVEehkfDYSwX+PIyBxZ5kvICewECirBHQVo0QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/profile';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
