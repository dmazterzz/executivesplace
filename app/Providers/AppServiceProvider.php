<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\APICurrencyConverter;
use App\Services\LocalCurrencyConverter;
use App\Services\Contracts\CurrencyConverterContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CurrencyConverterContract::class, function ($app) {
            if (config('currencyconverter.currency_converter_driver') === 'api') {
                return new APICurrencyConverter();
            } else {
                return new LocalCurrencyConverter();
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
