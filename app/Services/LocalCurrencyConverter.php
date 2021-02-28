<?php

namespace App\Services;
use App\Services\Contracts\CurrencyConverterContract;

class LocalCurrencyConverter implements CurrencyConverterContract
{
    public function convertCurrency($amount,$from,$to){
        
        if($from === $to){
            return $amount;
        }

        $rate = config('currencyconverter.' . $from . '.' . $to);
        $conversion = $amount * $rate;
        return $conversion;
    }
}
