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



class CmsCalendarioController extends Controller
{
    use AuthenticatesUsers;

    public function calendario(Request $request)
    {
        $user = Auth::user();
        $baseUrl = $request->getSchemeAndHttpHost();
        return view('cms.calendario.index', compact('baseUrl','user'));

    }
    public function calendarioConsultar(Request $request)
    {
        $user = Auth::user();
        $baseUrl = $request->getSchemeAndHttpHost();
        return view('cms.calendario.consult', compact('baseUrl','user'));

    }
     
    
    public function guardar()
    {
        $user = Auth::user();
        // Decodifica los datos JSON
        $datos = json_decode(file_get_contents('php://input'), TRUE);
        // Crea una instancia de Carbon para manipular la fecha
        $mes = $datos['mes'];
        $dia = $datos['dia'];
        $anual = $datos['anual'];

        // Verificar si ya existe un registro con la misma fecha y país_id
        $registroExistente = Calendario::where('month', $mes)
            ->where('day', $dia)
            ->where('year', $anual)
            ->where('pais_id', $user->pais_id)
            ->first();

        // Si existe, borra el registro existente
        if ($registroExistente) {
            $registroExistente->delete();
        }

        // Crea una nueva instancia del modelo Calendario y asigna los valores
        $calendario = new Calendario();
        $calendario->tipo = $datos['tipo_envio'];
        $calendario->month = $mes;
        $calendario->day = $dia;
        $calendario->year = $anual;
        // $calendario->pais_id = $datos['pais_id'];
        $calendario->rutas_id = $datos['rutas_id'];
        // Guarda el calendario en la base de datos
        $respuesta = $calendario->save();

        // Validación y asignación de mensajes
        if ($respuesta) {
            $mensajes["mensaje"] = "registro_procesado";
            die(json_encode($mensajes));
        } else {
            $mensajes["mensaje"] = "no_registro";
            die(json_encode($mensajes));
        }
    }
    
    public function consultFechas(Request $request)
    {
        $user = Auth::user();
        $pais_id = $user->pais_id;
        $respuesta = Calendario::get();
        // $respuesta = Calendario::where('pais_id',$pais_id)->get();

        $res = [];

        foreach ($respuesta as $value) {
            // Formatear la fecha con el formato DD/MM/AAAA
            $fechaFormateada = sprintf("%02d/%02d/%04d", $value['day'], $value['month'], $value['year']);

            switch ($value['tipo']) {
                case 'ground':
                    $evento="Terrestre";
                    break;
                case 'air':
                    $evento="Aéreo";
                    break;
                case 'sea':
                    $evento="Marítimo";
                    break;
                case 'air-ship':
                    $evento="Aéreo y Marítimo";
                    break;
                case 'air-ground':
                    $evento="Aéreo y Terrestre";
                    break;
            }
           
            
            // Agregar la fecha formateada al nuevo 
            $res[] = [
                'calendario_id' => $value['calendario_id'],
                'fecha_formateada' => $fechaFormateada,
                'tipo' => $value['tipo'],
                'evento' => $evento,
                'text_pais' => $value->ruta->descripcion,
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
    


    public function eliminarFechas(Request $request)
    {
        $user = Auth::user();
        $calendario_id = $request->id;

        // Elimina el registro con el ID específico
        $eliminacionExitosa = Calendario::where('calendario_id', $calendario_id)->delete();

        // Verifica si al menos un registro fue eliminado
        if ($eliminacionExitosa) {
            $mensaje = "registro_eliminado";
        } else {
            $mensaje = "registro_no_encontrado";
        }
        
        $respuesta = ["mensaje" => $mensaje];
        die(json_encode($respuesta));

    }
}
