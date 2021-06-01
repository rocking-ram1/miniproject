<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:953431f39fd33ca64ba5a05a5c20e18b",
                  "X-Auth-Token:ef4f31e7abdf25e0a4837f2a47e9a9a2"));

$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>
