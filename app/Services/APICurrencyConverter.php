<?php

namespace App\Services;
use App\Services\Contracts\CurrencyConverterContract;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class APICurrencyConverter implements CurrencyConverterContract
{
    public function convertCurrency($amount,$from,$to){

        if($from === $to){
            return $amount;
        }

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.exchangeratesapi.io/latest?symbols='.$to.'&format=1&base='.$from);

        if($res->getStatusCode() == 200){
            $rates = json_decode($res->getBody());
            $conversion = $amount * $rates->rates->$to;
            return $conversion;
        }
        else{
            return 'Error';
        }
       

    }
}
