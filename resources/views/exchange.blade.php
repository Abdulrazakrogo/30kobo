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

</head>

<?php
// set API Endpoint and API key 
$endpoint = 'latest';
$api_key = 'a6bb4b1df7d2b18bcb1d56778654cb87';
$base_currency = 'EUR';

// Initialize CURL:
$curl = curl_init("http://data.fixer.io/api/$endpoint?access_key=$api_key&base=$base_currency");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Storing data to $json variable:
$json = curl_exec($curl);
curl_close($curl);

// Decoding JSON response to array:
$result = json_decode($json, true);

// Accessing the exchange rate values, e.g. USD from response.:

$usd = $result['rates']['GBP'];
$eur = $result['rates']['USD'];
$usd_blackM = $usd+20;
//echo "USD black market".$usd_blackM;

$airport_gdp_live = $airport_usd * $usd;
$airport_eur_live = $airport_usd * $eur;

$island_gdp_live = $island_usd * $usd;
$island_eur_live = $island_usd * $eur;

$victoria_gdp_live = $victoria_usd * $usd;
$victoria_eur_live = $victoria_usd * $eur;

$kano_gdp_live = $kano_usd * $usd;
$kano_eur_live = $kano_usd * $eur;

$abuja_gdp_live = $abuja_usd * $usd;
$abuja_eur_live = $abuja_usd * $eur;

?>