<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    /*
     * Aceptar cookies y no volver a preguntar
     */
    public function aceptar(Request $request)
    {
        $cookiesAccepted = $request->input('cookies', []);

        // Definir nombres de cookies y valores por defecto
        $cookiesConfig = [
            'cookies_consent_1' => '0',
            'cookies_consent_2' => '0',
            'cookies_consent_3' => '0',
            'cookies_consent_4' => '0',
        ];

        // Marcar las cookies aceptadas
        foreach ($cookiesAccepted as $cookie) {
            $cookieName = $cookie['name'];
            $cookieValue = $cookie['value'];
            $cookiesConfig[$cookieName] = $cookieValue;
        }

        // Establecer cookies en la respuesta
        $response = response()->json(true);
        foreach ($cookiesConfig as $cookieName => $cookieValue) {
            $nuevaCookie = cookie($cookieName, $cookieValue, 40320, '/', null, false, true); // un mes, ruta '/', dominio null, seguro false, HTTP-only true
            $response->withCookie($nuevaCookie);

        }


        return $response;
    }

    /*
     * Consultar si el usuario aceptó las cookies antes para no volver a preguntar
     */
    public function consultar()
    {
        $cookiesAceptadas = [
            'cookies_consent_1' => Cookie::get('cookies_consent_1') == 1,
            'cookies_consent_2' => Cookie::get('cookies_consent_2') == 1,
            'cookies_consent_3' => Cookie::get('cookies_consent_3') == 1,
            'cookies_consent_4' => Cookie::get('cookies_consent_4') == 1,
        ];
        
        
        
        return $cookiesAceptadas;
        
    }

    public function eliminarTodas()
    {

        // Definir nombres de cookies
        $cookieNames = [
            'cookies_consent_1',
            'cookies_consent_2',
            'cookies_consent_3',
            'cookies_consent_4',
        ];

        // Establecer cookies en la respuesta
        $response = response()->json(true);
        foreach ($cookieNames as $cookieName) {
            // Obtener el valor de la cookie aceptada o establecerlo en null si no está presente
            $cookieValue = isset($cookiesAccepted[$cookieName]) ? $cookiesAccepted[$cookieName] : null;

            // Establecer la cookie en la respuesta
            $nuevaCookie = cookie($cookieName, $cookieValue, 40320, '/', null, false, true); // un mes, ruta '/', dominio null, seguro false, HTTP-only true
            $response->withCookie($nuevaCookie);

        }

        return $response;

    }


}
