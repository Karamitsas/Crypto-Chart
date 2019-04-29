<?php
$ch = curl_init('http://api.coinlayer.com/api/live?access_key=8c4585aafbda91b1f6d0bb91c2fe1eb3');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//sparar data
$json = curl_exec($ch);
curl_close($ch);

// Dekodar Json
$exchangeRates = json_decode($json, true);
// Tillgång / koppling till valutor.
$bitcoin = $exchangeRates['rates']['BTC'];
$dogecoin = $exchangeRates['rates']['DOGE'];
$ethereum = $exchangeRates['rates']['ETH'];

?>
