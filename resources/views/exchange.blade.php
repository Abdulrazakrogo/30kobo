<?php
// changing mimetype to Json
header('Content-Type: application/json');
 

$black_mart = '495'; // USD to NGN in black market, we fetch this from DB

$endpoint = 'latest';
$access_key = '82191452465d124d16c65fd640a682db';
$base0 = 'EUR';
$base1 = 'GBP';
$symbols = 'USD';

// Initialize CURL:
$ch = curl_init('https://data.fixer.io/api/'.$endpoint.'?access_key='.$access_key.'&base='.$base0.'&symbols='.$symbols.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json0 = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates0 = json_decode($json0);
 

echo '{"EUR": ',$exchangeRates0->rates->USD*$black_mart, ',';

// we take GBP against USD, this will convert 1 GBP to USD, we'll take the output and multiply it by $black_mart which is our USD in black market(price)
// Initialize CURL:
$ch = curl_init('https://data.fixer.io/api/'.$endpoint.'?access_key='.$access_key.'&base='.$base1.'&symbols='.$symbols.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json1 = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates1 = json_decode($json1);

echo '"GBP": ', $exchangeRates1->rates->USD*$black_mart, '}';



?>