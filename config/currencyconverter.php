<?php

return [

    'currency_converter_driver' => env('CURRENCYCONVERTER_DRIVER', 'local'),


    'GBP' => [
        'USD' => '1.3',
        'EUR' => '1.1',
    ],
    'EUR' => [
        'GBP' => '0.9',
        'USD' => '1.2',
    ],
    'USD' => [
        'GBP' => '0.7',
        'EUR' => '0.8',
    ]

];