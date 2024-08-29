<?php
include "includes.php";

// Export a JSON to the client
header("Content-type: application/json");
header("Access-Control-Allow-Origin: *");
// if(!isset($_GET["code"])){
//     $code  = "BTC";
// } else {
//     $code = $_GET["code"];
// }

$code = $_GET["code"] ?? "BTC";

$converter = new CryptoConverter($code);

// safe call operator if converter would be null so there would be an error
$rateInUSD = $converter?->convert();

echo "{\"rate\": $rateInUSD}";
