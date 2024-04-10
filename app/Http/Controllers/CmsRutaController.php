<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Calendario;
use App\Models\Pais;
use App\Models\RutaPais;



class CmsRutaController extends Controller
{
    use AuthenticatesUsers;

    public function rutaPais(Request $request)
    {   
        $user = Auth::user();
        $baseUrl = $request->getSchemeAndHttpHost();
        return view('cms.rutas.index', compact('baseUrl','user'));

    }
    public function rutaPaisEdit(Request $request, $ruta_id)  
    {

        $existe = RutaPais::where('rutas_id',$ruta_id)->where('activo', '!=', '2')->first();
        if(empty($existe)){
            return redirect()->route('cms.rutas.consultar');

        }
        $user = Auth::user();
        $baseUrl = $request->getSchemeAndHttpHost();

        return view('cms.rutas.index', compact('baseUrl','user','ruta_id'));

    }
    public function rutaConsultar(Request $request)
    {
        $user = Auth::user();
        $baseUrl = $request->getSchemeAndHttpHost();
        return view('cms.rutas.consult', compact('baseUrl','user'));

    }
     
    
    public function guardar()
    {

        $user = Auth::user();
        // Decodifica los datos JSON
        $datos = json_decode(file_get_contents('php://input'), TRUE);
        // Declara Variables
        $pais_id_origen    = $datos['pais_origen'];
        $pais_id_destino   = $datos['pais_destino'];
        $check_ruta_inversa   = $datos['ruta_inversa'];
        // Validamos el check
        $ruta_inversa = $check_ruta_inversa ? 1 : 0;

        if($pais_id_origen == $pais_id_destino){
            $mensajes["mensaje"] = "pais_iguales";
            die(json_encode($mensajes));
        }
    
        // Verificar si ya existe un registro con la misma fecha y país_id
        $registroExistente = RutaPais::where('pais_id_origen', $pais_id_origen)
            ->where('pais_id_destino', $pais_id_destino)
            ->where('activo', '!=', '2')

            ->first();

        // Si existe, borra el registro existente
        if ($registroExistente) {
            $mensajes["mensaje"] = "existe";
            die(json_encode($mensajes));
        }

        // paisOrigen
        // paisDestino
        
        $descripcion_pais_origen    = Pais::where('pais_id',$pais_id_origen)->first()->descripcion;
        $descripcion_pais_destino   = Pais::where('pais_id',$pais_id_destino)->first()->descripcion;

        // Crea una nueva instancia del modelo Calendario y asigna los valores
        $ruta = new RutaPais();
        $ruta->descripcion      = $descripcion_pais_origen." - ".$descripcion_pais_destino;
        $ruta->pais_id_origen   = $pais_id_origen;
        $ruta->pais_id_destino  = $pais_id_destino;
        $ruta->inversa          = $ruta_inversa;
        $ruta->activo           = 1;

        $respuesta = $ruta->save();

        // Validación y asignación de mensajes
        if ($respuesta) {
            $mensajes["mensaje"] = "modificacion_procesada";
            die(json_encode($mensajes));
        } else {
            $mensajes["mensaje"] = "no_registro";
            die(json_encode($mensajes));
        }
    }
    public function modificar()
    {
        $user = Auth::user();
        // Decodifica los datos JSON
        $datos = json_decode(file_get_contents('php://input'), TRUE);


        $ruta = RutaPais::where('rutas_id',$datos['rutas_id'])->first();

        $ruta->inversa = 4;

        $pais_id_origen    = $datos['pais_origen'];
        $pais_id_destino   = $datos['pais_destino'];
        $check_ruta_inversa   = $datos['ruta_inversa'];
        
        $descripcion_pais_origen    = Pais::where('pais_id',$pais_id_origen)->first()->descripcion;
        $descripcion_pais_destino   = Pais::where('pais_id',$pais_id_destino)->first()->descripcion;
        $ruta_inversa = $check_ruta_inversa ? 1 : 0;

        // Crea una nueva instancia del modelo Calendario y asigna los valores
        $ruta->descripcion      = $descripcion_pais_origen." - ".$descripcion_pais_destino;
        $ruta->pais_id_origen   = $pais_id_origen;
        $ruta->pais_id_destino  = $pais_id_destino;
        $ruta->inversa          = $ruta_inversa;

        $respuesta = $ruta->save();

        // Validación y asignación de mensajes
        if ($respuesta) {
            $mensajes["mensaje"] = "modificacion_procesada";
            die(json_encode($mensajes));
        } else {
            $mensajes["mensaje"] = "no_registro";
            die(json_encode($mensajes));
        }
    }
    
    public function consultRutas(Request $request)
    {
        $user = Auth::user();
        $pais_id = $user->pais_id;

        // Instancia del modelo RutaPais
        $rutaPaisModel = new RutaPais();

        $datos = json_decode(file_get_contents('php://input'), TRUE);
        
        // Llamada al método para obtener rutas activas
        $respuesta = $rutaPaisModel->obtenerRutasActivas($datos);
        $res = [];
        foreach ($respuesta as $value) {
            // Validamos si el registro aparecerá en andos lados
            $ruta_inversa = $value['inversa'] == 0 ? 'Desactivada' :  'Activa' ;

            // Agregar la fecha formateada al nuevo array
            $res[] = [
                
                'rutas_id' => $value['rutas_id'],
                'descripcion' => $value['descripcion'],
                'text_ruta_inversa' => $ruta_inversa,
                'activo' => $value['activo'],
                'pais_origen' => $value['pais_id_origen'],
                'pais_destino' =>  $value['pais_id_destino'],
                'ruta_inversa' => $value['inversa'],
                
                // Agrega cualquier otra propiedad que desees mantener en el nuevo array
            ];
        }
        
        $listado = (object)$res;
        
        die(json_encode($listado));

    }
    public function consultPais(Request $request)
    {
        $user = Auth::user();
        $pais_id = $user->pais_id;
        $respuesta = Pais::get();
        $res = [];

        foreach ($respuesta as $value) {

            $res[] = [
                'pais_id' => $value['pais_id'],
                'descripcion' => $value['descripcion'],
            ];
        }
        
        $listado = (object)$res;
        
        die(json_encode($listado));

    }

    public function getRutas(Request $request)
    {
        $user = Auth::user();
        $pais_id = $user->pais_id;
        $respuesta = RutaPais::where('activo', '!=', '2')->get();
        $res = [];

        foreach ($respuesta as $value) {

            $res[] = [
                'pais_id' => $value['pais_id'],
                'descripcion' => $value['descripcion'],
            ];
        }
        
        $listado = (object)$res;
        
        die(json_encode($listado));

    }
    
    

    public function modificarRutasEstatus(){
        $datos = json_decode(file_get_contents('php://input'), TRUE);
        $data = [
            'rutas_id' => $datos['id'],
            'activo' => $datos['estatus'],
            // ... otras columnas si es necesario
        ];

        $modeloRutasPais = new RutaPais();
        $respuesta = $modeloRutasPais->modificarRutasEstatus($data);
        if($respuesta==true){
            $mensajes["mensaje"] = "modificacion_procesada";
        }else{
            $mensajes["mensaje"] = "no_modifico";
        }

        die(json_encode($mensajes));
    }
}
