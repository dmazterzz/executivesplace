<?php

namespace App\Facades;

use App\Services\Contracts\CurrencyConverterContract;
use Illuminate\Support\Facades\Facade;

class CurrencyConverterFacades extends Facade
{
    protected static function getFacadeAccessor(){
        return CurrencyConverterContract::class;
    }
}
