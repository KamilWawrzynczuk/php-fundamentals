<?php

class Converter {

}

interface CanConvert  {
    public function convert(float $value);
}

class CryptoConverter extends Converter{
    //properties
    // public string $currencyCode;

    //constructor
    // when i am using public keyword in constructor then i do not ned prperties and set up inside. IF the same name
    function __construct(public string $currencyCode) {
        // $this->currencyCode = $currencyCode;
    }

    //methods
    public function convert(float $value = 1): float|bool {
        $code = $this->currencyCode;
        $url = "https://cex.io/api/ticker/$code/USD";
        $json = file_get_contents($url);
        if($json!=false) {
            $data = json_decode($json);
            $last = $data->last;
            return $value * $last;
        } else {
            return false;
        }


    }
}

$c = new CryptoConverter(currencyCode: "BTC");
