<?php
$access_token = 'iZIpGI3Ax5VsFFbJQvvADnjBJwSZwryZ/H3/iZVu252xZV4yHiTg8mJubjwQXkk8axMl8hQ+sMFHszz8/D4zmJYlanajM+gLKBcp/wy8ae51cWXhV5XHj7GOQqfAZFK5QqiazhFr4nfSk0hHahOEMgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
