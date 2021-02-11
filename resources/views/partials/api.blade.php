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
echo "
";
echo "EURO in normal market:  $usd ";
echo "
";
echo "<br />";
echo " Euro in black market(+23): $usd_blackM";

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