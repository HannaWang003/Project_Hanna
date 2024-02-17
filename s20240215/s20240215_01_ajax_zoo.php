<?php
header('Access-Control-Allow-Origin: *');
$url = 'https://data.taipei/api/v1/dataset/87b38c72-f9e7-4f75-b3af-5b6684f2a059?scope=resourceAquire';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
$output = curl_exec($ch);
curl_close($ch);
