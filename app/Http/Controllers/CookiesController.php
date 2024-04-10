<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class CookiesController extends Controller
{
    public function setCookie(Request $request)  
    {
        return "asd";
        $expirationTime = Carbon::create(2050, 12, 31, 23, 59, 59);
        $minutesUntilExpiration = now()->diffInMinutes($expirationTime);

        $cookies = $request->cookies;

        $cookieTecnicas = $cookies->get('cookies_consent_tecnicas', Str::uuid());
        $cookieMejora = $cookies->get('cookies_consent_mejora', Str::uuid());
        $cookieMedicion = $cookies->get('cookies_consent_medicion', Str::uuid());
        $cookieSegmentacion = $cookies->get('cookies_consent_segmentacion', Str::uuid());


        return response()
            ->view('web.home', compact('sliders', 'block_adhoc_envio', 'my_casillero_ico', 'opiniones', 'pais', 'seccion'))
            ->withCookie('cookies_consent_tecnicas', $cookieTecnicas, $minutesUntilExpiration)
            ->withCookie('cookies_consent_mejora', $cookieMejora, $minutesUntilExpiration)
            ->withCookie('cookies_consent_medicion', $cookieMedicion, $minutesUntilExpiration)
            ->withCookie('cookies_consent_segmentacion', $cookieSegmentacion, $minutesUntilExpiration);

        // Si ya ha aceptado las cookies, simplemente retorna la vista
        return view('web.home', compact('sliders', 'block_adhoc_envio', 'my_casillero_ico', 'opiniones', 'pais', 'seccion'));
    }
    
    public function getCookie()  
    {
        return request()->cookie('cookie_consent');
    }

    public function delCookie()  
    {

        return back()
    ->withCookie('cookies_consent_tecnicas', '', -1)
    ->withCookie('cookies_consent_mejora', '', -1)
    ->withCookie('cookies_consent_medicion', '', -1)
    ->withCookie('cookies_consent_segmentacion', '', -1);


    
    
    }
}
