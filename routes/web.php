<?php
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InicioController;
//Colombia controllers


use App\Http\Controllers\SliderController;
use App\Http\Controllers\CookiesController;


// CMS IMPORT
use App\Http\Controllers\CmsLoginController;
use App\Http\Controllers\CmsCalendarioController;
use App\Http\Controllers\CmsRutaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::post('/select-redi', [InicioController::class, 'redireccionarSegunPais'])->name('select.pais');


Route::get('/mexico', [InicioController::class, 'progresoMexico'])->name('progreso.mexico');
Route::get('/peru', [InicioController::class, 'progresoPeru'])->name('progreso.republica-dominicana');
Route::get('/republica-dominicana', [InicioController::class, 'progresoRepublica'])->name('progreso.republica-dominicana');
Route::get('/condiciones-de-envios-comerciales', [InicioController::class, 'condicionesInicio'])->name('progreso.peru');



Route::domain(env('APP_URL'))->group(function () {
    Route::get('/', [InicioController::class, 'inicio'])->name('inicio');
    Route::get('/politica-de-privacidad', [InicioController::class, 'politicaInicio'])->name('progreso.peru');

});

Route::get('/venezuela', [InicioController::class, 'inicioVePais'])->name('venezuela.pre.home');

Route::domain(env('APP_COLOMBIA'))->group(function () {
    Route::get('/', [InicioController::class, 'inicioPais'])->name('colombia.home');
    Route::get('/oficinas', [InicioController::class, 'oficinasPais'])->name('colombia.oficinas');
    Route::get('/servicios', [InicioController::class, 'serviciosPais'])->name('colombia.servicio');
    Route::get('/quienes-somos', [InicioController::class, 'quienesSomosPais'])->name('colombia.quienes-somos');
    Route::get('/corporativos-y-franquiciados', [InicioController::class, 'corporativoPais'])->name('colombia.corporativos');
    Route::get('/contacto', [InicioController::class, 'contactosPais'])->name('colombia.contactos');
    Route::get('/politica-de-privacidad', [InicioController::class, 'privacidadPais'])->name('colombia.privacidad');
    Route::get('/condiciones-de-envios-comerciales', [InicioController::class, 'condicionesPais'])->name('colombia.condiciones');
    Route::get('/faqs', [InicioController::class, 'preguntasFrec'])->name('colombia.faqs');
    Route::get('/articulos-prohibidos', [InicioController::class, 'articulosProhibidos'])->name('colombia.articulos.prohibidos');
    Route::get('/envios-servicios-expresos', [InicioController::class, 'enviosExpres'])->name('colombia.envios');
    Route::get('/aviso-legal', [InicioController::class, 'avisoLegal'])->name('colombia.envios');
    Route::get('/politica-de-cookies', [InicioController::class, 'politicaCookies'])->name('colombia.envios');
    Route::get('/recomendaciones-de-embalaje', [InicioController::class, 'embalajePais'])->name('colombia.envios');
    Route::post('/correo-contactos', [InicioController::class, 'correoContactos'])->name('colombia.correo.envios');


});
Route::domain(env('APP_USA'))->group(function () { 
    Route::get('/', [InicioController::class, 'inicioPais'])->name('usa.home');
    Route::get('/oficinas', [InicioController::class, 'oficinasPais'])->name('usa.oficinas');
    Route::get('/servicios', [InicioController::class, 'serviciosPais'])->name('usa.servicio');
    Route::get('/quienes-somos', [InicioController::class, 'quienesSomosPais'])->name('usa.quienes-somos');
    Route::get('/corporativos-y-franquiciados', [InicioController::class, 'corporativoPais'])->name('usa.corporativos');
    Route::get('/contacto', [InicioController::class, 'contactosPais'])->name('usa.contactos');
    Route::get('/politica-de-privacidad', [InicioController::class, 'privacidadPais'])->name('usa.privacidad');
    Route::get('/condiciones-de-envios-comerciales', [InicioController::class, 'condicionesPais'])->name('usa.condiciones');
    Route::get('/faqs', [InicioController::class, 'preguntasFrec'])->name('usa.faqs');
    Route::get('/articulos-prohibidos', [InicioController::class, 'articulosProhibidos'])->name('usa.articulos.prohibidos');
    Route::get('/envios-servicios-expresos', [InicioController::class, 'enviosExpres'])->name('usa.envios');
    Route::get('/aviso-legal', [InicioController::class, 'avisoLegal'])->name('usa.envios');
    Route::get('/politica-de-cookies', [InicioController::class, 'politicaCookies'])->name('usa.envios');

    Route::get('/recomendaciones-de-embalaje', [InicioController::class, 'embalajePais'])->name('usa.envios');

    
});
Route::domain(env('APP_VENEZUELA'))->group(function () {
    Route::get('/', [InicioController::class, 'inicioPais'])->name('venezuela.home');
    Route::get('/oficinas', [InicioController::class, 'oficinasPais'])->name('venezuela.oficinas');
    Route::get('/agencias', [InicioController::class, 'oficinasPais'])->name('venezuela.agengias');
    Route::get('/servicios', [InicioController::class, 'serviciosPais'])->name('venezuela.servicio');
    Route::get('/quienes-somos', [InicioController::class, 'quienesSomosPais'])->name('venezuela.quienes-somos');
    Route::get('/corporativos', [InicioController::class, 'corporativoPais'])->name('venezuela.corporativos');
    Route::get('/contacto', [InicioController::class, 'contactosPais'])->name('venezuela.contactos');
    Route::get('/politica-de-privacidad', [InicioController::class, 'privacidadPais'])->name('venezuela.privacidad');
    Route::get('/condiciones-de-envios-comerciales', [InicioController::class, 'condicionesPais'])->name('venezuela.condiciones');
    Route::get('/faqs', [InicioController::class, 'preguntasFrec'])->name('venezuela.faqs');
    Route::get('/articulos-prohibidos', [InicioController::class, 'articulosProhibidos'])->name('venezuela.articulos.prohibidos');
    Route::get('/envios-servicios-expresos', [InicioController::class, 'enviosExpres'])->name('venezuela.envios');
    Route::get('/aviso-legal', [InicioController::class, 'avisoLegal'])->name('venezuela.envios');
    Route::get('/politica-de-cookies', [InicioController::class, 'politicaCookies'])->name('venezuela.envios');

    Route::get('/recomendaciones-de-embalaje', [InicioController::class, 'embalajePais'])->name('venezuela.envios');

});
Route::domain(env('APP_ECUADOR'))->group(function () {
    Route::get('/', [InicioController::class, 'inicioPais'])->name('ecuador.home');
    Route::get('/oficinas', [InicioController::class, 'oficinasPais'])->name('ecuador.oficinas');
    Route::get('/servicios', [InicioController::class, 'serviciosPais'])->name('ecuador.servicio');
    Route::get('/quienes-somos', [InicioController::class, 'quienesSomosPais'])->name('ecuador.quienes-somos');
    Route::get('/corporativos-y-franquiciados', [InicioController::class, 'corporativoPais'])->name('ecuador.corporativos');
    Route::get('/contacto', [InicioController::class, 'contactosPais'])->name('ecuador.contactos');
    Route::get('/politica-de-privacidad', [InicioController::class, 'privacidadPais'])->name('ecuador.privacidad');
    Route::get('/condiciones-de-envios-comerciales', [InicioController::class, 'condicionesPais'])->name('ecuador.condiciones');
    Route::get('/faqs', [InicioController::class, 'preguntasFrec'])->name('ecuador.faqs');
    Route::get('/articulos-prohibidos', [InicioController::class, 'articulosProhibidos'])->name('ecuador.articulos.prohibidos');
    Route::get('/envios-servicios-expresos', [InicioController::class, 'enviosExpres'])->name('ecuador.envios');
    Route::get('/aviso-legal', [InicioController::class, 'avisoLegal'])->name('ecuador.envios');
    Route::get('/politica-de-cookies', [InicioController::class, 'politicaCookies'])->name('ecuador.envios');

    Route::get('/recomendaciones-de-embalaje', [InicioController::class, 'embalajePais'])->name('ecuador.envios');

});
Route::domain(env('APP_EUROPA'))->group(function () {
    Route::get('/', [InicioController::class, 'inicioPais'])->name('europa.home');
    Route::get('/oficinas', [InicioController::class, 'oficinasPais'])->name('europa.oficinas');
    
    Route::get('/servicios', [InicioController::class, 'serviciosPais'])->name('europa.servicio');
    Route::get('/quienes-somos', [InicioController::class, 'quienesSomosPais'])->name('europa.quienes-somos');
    Route::get('/corporativos-y-franquiciados', [InicioController::class, 'corporativoPais'])->name('europa.corporativos');
    Route::get('/contacto', [InicioController::class, 'contactosPais'])->name('europa.contactos');
    Route::get('/politica-de-privacidad', [InicioController::class, 'privacidadPais'])->name('europa.privacidad');
    Route::get('/condiciones-de-envios-comerciales', [InicioController::class, 'condicionesPais'])->name('europa.condiciones');
    Route::get('/faqs', [InicioController::class, 'preguntasFrec'])->name('europa.faqs');
    Route::get('/articulos-prohibidos', [InicioController::class, 'articulosProhibidos'])->name('europa.articulos.prohibidos');
    Route::get('/envios-servicios-expresos', [InicioController::class, 'enviosExpres'])->name('europa.envios');
    Route::get('/aviso-legal', [InicioController::class, 'avisoLegal'])->name('europa.envios');
    Route::get('/politica-de-cookies', [InicioController::class, 'politicaCookies'])->name('europa.envios');

    Route::get('/recomendaciones-de-embalaje', [InicioController::class, 'embalajePais'])->name('europa.envios');

    Route::get('/recogida-paquetes-a-domicilio', [InicioController::class, 'recogidaPaquetes'])->name('europa.recogida');
    Route::get('/envios-puerta-a-puerta', [InicioController::class, 'envioPuartaPuerta'])->name('europa.puertapuerta');
    Route::get('/reempaque-envios', [InicioController::class, 'reempaqueEuropaVenezuela'])->name('europa.reempaque');

    
    
    
});

Route::get('cms', [CmsLoginController::class, 'index'])->name('cms.login');
Route::post('login/iniciarSession', [CmsLoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    // CMS login
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // CMS Navigate
    Route::get('cms/logout', [CmsLoginController::class, 'logout'])->name('cms.logout');
    Route::get('cms/dashboard/', [CmsLoginController::class, 'dashboard'])->name('cms.dashboard');

    //CALENDARIO
    Route::get('cms/calendario/', [CmsCalendarioController::class, 'calendario'])->name('cms.calendario');
    Route::get('cms/calendario/consultar', [CmsCalendarioController::class, 'calendarioConsultar'])->name('cms.calendario.consultar');
    Route::post('cms/calendario/guardar', [CmsCalendarioController::class, 'guardar']);

    //RUTAS
    Route::get('cms/ruta/', [CmsRutaController::class, 'rutaPais'])->name('cms.rutas');
    Route::get('cms/ruta/editar/{ruta_id}', [CmsRutaController::class, 'rutaPaisEdit'])->name('cms.rutas.editar');



    Route::get('cms/ruta/consultar', [CmsRutaController::class, 'rutaConsultar'])->name('cms.rutas.consultar');
    Route::post('cms/ruta/guardar', [CmsRutaController::class, 'guardar']);
    Route::post('cms/ruta/modificar', [CmsRutaController::class, 'modificar']);
    Route::post('cms/ruta/cambiar_estatus', [CmsRutaController::class, 'modificarRutasEstatus']);

    // CMS Controllers
    // Route::get('login/iniciarSession', [CmsLoginController::class, 'registrarUsuario']);
});


//Consutas Sevicios CMS
Route::post('get/slider', [SliderController::class, 'inicio'])->name('get.slider.post');
Route::post('get/calendario', [CmsCalendarioController::class, 'consultFechas'])->name('get.calendario.post');
Route::post('get/paises', [CmsCalendarioController::class, 'consultPais'])->name('get.pais.post');
Route::post('get/rutas', [CmsRutaController::class, 'consultRutas'])->name('get.pais.post');

//Consutas Sevicios Web
Route::post('get/rutas/web', [InicioController::class, 'consultRutas'])->name('get.pais.post');


Route::post('calendario/eliminar', [CmsCalendarioController::class, 'eliminarFechas'])->name('get.calendario.post');

