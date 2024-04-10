<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TrackingController;
use App\Http\Controllers\Api\CookieController;
use App\Http\Controllers\Api\ApiCmsCalendarioController;
use App\Http\Controllers\Api\MailController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/consumir/tracking', [TrackingController::class, 'consumirApi']);


Route::post('/aceptar-cookies', [CookieController::class, 'aceptar']);
Route::get('/aceptar-cookies/consultar', [CookieController::class, 'consultar']);
Route::get('/eliminar-cookies', [CookieController::class, 'eliminarTodas']);

//CALENDARIO
Route::post('/calendario/guardar', [ApiCmsCalendarioController::class, 'guardar']);
Route::get('/actualizar/pass', [MailController::class, 'actualizarpas']);



//CORROES
Route::post('/contactanos', [MailController::class, 'enviarCorreoContactanos']);

Route::post('/envios', [MailController::class, 'enviarCorreoEnvios']);

Route::post('/corporativos', [MailController::class, 'enviarCorreoCorporativos']);

Route::post('/franquiciados', [MailController::class, 'enviarCorreoFranquciados']);

Route::post('/progreso', [MailController::class, 'enviarCorreoProgreso']);
