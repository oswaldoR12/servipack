<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cookie;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $cookies_consent_1 = Cookie::get('cookies_consent_1');
        $cookies_consent_2 = Cookie::get('cookies_consent_2');
        $cookies_consent_3 = Cookie::get('cookies_consent_3');
        $cookies_consent_4 = Cookie::get('cookies_consent_4');
        
        View::composer('*', function ($view) use ($cookies_consent_1, $cookies_consent_2, $cookies_consent_3, $cookies_consent_4) {
            $cookiesAceptadas = [
                'cookies_consent_1' => $cookies_consent_1,
                'cookies_consent_2' => $cookies_consent_2,
                'cookies_consent_3' => $cookies_consent_3,
                'cookies_consent_4' => $cookies_consent_4,
            ];
            $view->with('cookiesAceptadas', $cookiesAceptadas);
        });

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
