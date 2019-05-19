<?php
$access_token = 'zB790xmnHpNJkOnJOmv1Fw9BUC30lhSWKcK8JAMLjNW6nWyHYUhnf35BH2cgJjTgHqgP2RbEcni5F3Ci9kyuznxWgeudp8Wz+2PqlQodom2r6btxQ/FxfqHJKl1q8GuZNASA1oRQgrnBLBafNszmPwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
