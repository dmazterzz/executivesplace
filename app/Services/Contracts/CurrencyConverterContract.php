<?php

namespace App\Services\Contracts;

interface CurrencyConverterContract
{
    public function convertCurrency($amount,$from,$to);
}