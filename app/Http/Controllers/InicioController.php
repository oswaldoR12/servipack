<?php

namespace App\Http\Controllers;

use App\Models\Campo;
use App\Models\Perfil;
use App\Models\TipoFormulario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Slider;
use App\Models\Seccion;
use App\Models\Opinion;
use App\Models\Pais;
use App\Models\Calendario;
use App\Models\RutaPais;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


use App\Mail\Contacto;
use Illuminate\Support\Facades\Mail;



class InicioController extends Controller
{
    
    protected $paisDominio;
    protected $idiomaID;

    public function __construct(Request $request)
    {
        $domain = $request->getHost();
        switch ("http://".$domain) {
            case env('APP_URL'):
                $this->idiomaID = 1;
                $this->paisDominio = 0;
                break;
            case env('APP_COLOMBIA'):
                $this->idiomaID = 1;
                $this->paisDominio = 1;
                break;
            case env('APP_USA'):
                $this->idiomaID = 1;
                $this->paisDominio = 2;
                break;
            case env('APP_ECUADOR'):
                $this->idiomaID = 1;
                $this->paisDominio = 3;
                break;
            case env('APP_EUROPA'):
                $this->idiomaID = 1;
                $this->paisDominio = 4;
                break;
            case env('APP_VENEZUELA'):
                $this->idiomaID = 1;
                $this->paisDominio = 5;
                break;
            case env('APP_MEXICO'):
                $this->idiomaID = 1;
                $this->paisDominio = 6;
                break;
            case env('APP_PERU'):
                $this->idiomaID = 1;
                $this->paisDominio = 7;
                break;
            case env('APP_REPUBLICA_DOMINICANA'):
                $this->idiomaID = 1;
                $this->paisDominio = 8;
                break;
            default:
            $this->idiomaID = 1;    
            $this->paisDominio = -1; // Valor predeterminado en caso de que no coincida con ninguno de los dominios específicos
        }
    }

     
    public function inicio()
    {

        $dominioActual = $this->paisDominio;
        $pais = new \stdClass(); // Crear un objeto vacío si no está definido
        $pais->slug = ''; // Asignar un valor predeterminado, en este caso, una cadena vacía
        return view('web.inicio', compact('pais'));       
    }


    public function redireccionarSegunPais(Request $request)
    {
        $pais = $request->input('pais');

        switch ($pais) {
            case 'venezuela':
                return redirect()->route('venezuela.pre.home');
                break;
            case 'usa':
                return redirect()->route('usa.home');
                break;
            case 'colombia':
                return redirect()->route('colombia.home');
                break;
            case 'ecuador':
                return redirect()->route('ecuador.home');
                break;
            case 'europa':
                return redirect()->route('europa.home');
                break;
            case 'mexico':
                return redirect()->route('progreso.mexico');
                break;
            case 'republica-dominicana':
                return redirect()->route('progreso.republica-dominicana');
                break;
            case 'peru':
                return redirect()->route('progreso.peru');
                break;
            // Agrega más casos según sea necesario
            default:
                // Redirección predeterminada si no coincide con ningún caso
                return redirect()->to('url_por_defecto');
        }
    }
    
    public function inicioPais(Request $request) 
    {

        $consulSlider = Slider::where('pais_id', $this->paisDominio)->where('idioma_id', $this->idiomaID)->orderBy('orden', 'asc')->get();
        $sliders = [];
        foreach ($consulSlider as $key => $value) {
            $galeria_m = $value->galeriaM;
            $galeria_d = $value->galeriaD;
            
            $valor = [
                "slider_id" => $value->slider_id,
                "titulo" => $value->titulo,
                "descripcion" => $value->descripcion,
                "slug" => $value->slug,
                "idioma_id" => $value->idioma_id,
                "pais_id" => $value->pais_id,
                "url" => $value->url,
                "orden" => $value->orden,
                "url_img_m" => $galeria_m->ruta,
                "url_img_d" => $galeria_d->ruta,
            ];

            $sliders[] = $valor;
        }
        // Consulta para obtener secciones con pais_id igual a 1
        $block_adhoc_envio = Seccion::where('descripcion', 'block-adhoc-envio')->where('pais_id', $this->paisDominio)->where('idioma_id', $this->idiomaID)->first();
        $my_casillero_ico = Seccion::where('descripcion', 'my_casillero_ico')->where('pais_id', $this->paisDominio)->where('idioma_id', $this->idiomaID)->first();
        $opiniones = Opinion::where('pais_id', $this->paisDominio)->where('idioma_id', $this->idiomaID)->orderBy('orden', 'asc')->get();
        $pais = Pais::where('pais_id',$this->paisDominio)->first();

        $calendario = Calendario::get();
        $seccion =["activate" => "home"];
      
        $dominioActual = $this->paisDominio;


        return view('web.home', compact('sliders','block_adhoc_envio','my_casillero_ico','opiniones','pais','seccion','calendario','dominioActual'));
    }

    public function oficinasPais(Request $request) 
    {
        $provincia = $request->query('provincia');
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "oficina"];

        $dominioActual = $this->paisDominio;
        return view('web.oficinas', compact('pais','seccion','provincia','dominioActual'));
    }

    public function serviciosPais(Request $request) 
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "servcios"];

        $dominioActual = $this->paisDominio;
        return view('web.servcios-tarifas', compact('pais','seccion','dominioActual'));
    }
    public function quienesSomosPais(Request $request) 
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "quienes-somos"];

        $dominioActual = $this->paisDominio;
        return view('web.quienes-somos', compact('pais','seccion','dominioActual'));
    }
    public function corporativoPais(Request $request) 
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "corporativos"];

        $dominioActual = $this->paisDominio;
        return view('web.corporativos', compact('pais','seccion','dominioActual'));
    }
    
    public function contactosPais(Request $request) 
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "contacto"];

        $dominioActual = $this->paisDominio;
        return view('web.contacto', compact('pais','seccion','dominioActual'));
    }

    public function inicioVePais(Request $request) 
    {
        $seccion =["activate" => "contacto"];
        $dominioActual = $this->paisDominio;
        return view('web.inicio-ve');
    }

    public function privacidadPais(Request $request) 
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.privacidad', compact('pais','seccion','dominioActual'));
    }

    public function condicionesPais(Request $request) 
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.condiciones', compact('pais','seccion','dominioActual'));
    }
    public function progresoMexico()
    {
        $pais = Pais::where('pais_id',1)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('progreso-mexico', compact('pais','seccion','dominioActual'));
    }
    public function progresoPeru()
    {
        $pais = Pais::where('pais_id',1)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('progreso-peru', compact('pais','seccion','dominioActual'));
    }
    public function progresoRepublica()
    {
        $pais = Pais::where('pais_id',1)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('progreso-rpd', compact('pais','seccion','dominioActual'));
    }
    public function politicaInicio()
    {
        $pais = Pais::where('pais_id',1)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('politica-de-privacidad', compact('pais','seccion','dominioActual'));
    }
    public function condicionesInicio()
    {
        $pais = Pais::where('pais_id',1)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('condiciones-envios', compact('pais','seccion','dominioActual'));
    }

    public function preguntasFrec()
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.frecuentes', compact('pais','seccion','dominioActual'));
    }

    public function articulosProhibidos()
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.articulos-prohibidos', compact('pais','seccion','dominioActual'));
    }

    

    public function enviosExpres()
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.envios-expres', compact('pais','seccion','dominioActual'));
    }
    public function embalajePais()
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.embalaje', compact('pais','seccion','dominioActual'));
    }
    
    public function recogidaPaquetes()
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.recogida-paquetes-a-domicilio', compact('pais','seccion','dominioActual'));
    }
    public function envioPuartaPuerta()
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.envios-puerta-a-puerta', compact('pais','seccion','dominioActual'));
    }

    
    public function reempaqueEuropaVenezuela()
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.reempaque-envios', compact('pais','seccion','dominioActual'));
    }
    public function avisoLegal()
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.aviso-legal', compact('pais','seccion','dominioActual'));
    }
    
    
 


    public function politicaCookies()
    {
        $pais = Pais::where('pais_id',$this->paisDominio)->first();
        $seccion =["activate" => "null"];
        $dominioActual = $this->paisDominio;
        return view('web.cookies', compact('pais','seccion','dominioActual'));
    }
    public function consultRutas(Request $request)
    {
       
        $pais_id =  $this->paisDominio;

        $res = [];
        $respuestaOrigen = RutaPais::where('activo', '!=', '2')
            ->where('activo', '!=', '0')
            ->where('pais_id_origen', $pais_id)
            ->get();
        $respuestaDestino = RutaPais::where('activo', '!=', '2')
            ->where('pais_id_destino', $pais_id)
            ->where('inversa',1)
            ->get();
            $res = [];
        foreach ($respuestaOrigen as $value) {
            $res[] = [
                'rutas_id' => $value['rutas_id'],
                'descripcion' => $value['descripcion'],
            ];
        }
        $respuestaDestino = RutaPais::where('activo', '!=', '2')
        ->where('pais_id_destino', $pais_id)
        ->where('inversa',1)
        ->get();
        foreach ($respuestaDestino as $value) {
            $res[] = [
                'rutas_id' => $value['rutas_id'],
                'descripcion' => $value['descripcion'],
            ];
        }
        $listado = (object)$res;
        
        die(json_encode($listado));

    }
}



