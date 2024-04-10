<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; // Asegúrate de importar la clase Controller
use App\Mail\Contacto;
use App\Mail\Envios;
use App\Mail\Corporativos;
use App\Mail\Franquiciados;
use App\Mail\Progreso;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\Pais;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class MailController extends Controller
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

    public function enviarCorreoContactanos(Request $request)
    {

        $pais = Pais::where('pais_id',$this->paisDominio)->first();

        if($pais->pais_id == 1){
            $destinatario = 'servi@servipack.com';
        }else if($pais->pais_id == 2){
            $destinatario = 'servi@servipack.com';
        }else if($pais->pais_id == 3){
            $destinatario = 'servi@servipack.com';
        }else if($pais->pais_id == 4){
            $destinatario = 'servi@servipack.com';
        }else if($pais->pais_id == 5){
            $destinatario = 'servi@servipack.com';
        } 


        $date = Carbon::now()->format('d/m/Y H:i');
        $name = $request->nombre;
        $email = $request->email;
        $phone = $request->telefono;
        $comments = $request->comentarios;
        $condiciones_uso = $request->condicionesUso;
        $condiciones_comerciales = $request->condicionesEnvios;
        $asunto = $request->asunto;

        if($asunto == "solicitar-info-para-envio"){

            $asunto == "Solicitar información para hacer un envío (solicitar-info-para-envio)";
        }else if($asunto == "duda-sobre-envio"){
            $asunto = "Duda sobre un envío en curso  (duda-sobre-envio)";
        }else if($asunto == "conocer-salidas"){
            $asunto = "Conocer salidas del mes y fechas de cierre (conocer-salidas)";
        }else if($asunto == "solicitar-recogida"){
            $asunto = "Solicitar recogida (solicitar-recogida)";
        }else if($asunto == "colaboracion-fines-solidarios"){
            $asunto = "Colaboración con fines solidarios (colaboracion-fines-solidarios)";
        }else if($asunto == "quiero-trabajar"){
            $asunto = "Quiero trabajar en Servicios Expre (quiero-trabajar)";
        }
      
        $remitente = ['address' => $email, 'name' => $name];
        try {
            // Crear la instancia de la clase Contacto y enviar el correo
            Mail::to($destinatario)
                ->send(new Contacto($name, $email, $phone, $comments, $condiciones_uso, $condiciones_comerciales, $asunto, $date));

            // Enviar una respuesta JSON si el correo se envió correctamente
            return response()->json(['status' => 'success', 'message' => 'Correo enviado correctamente']);
        } catch (\Exception $e) {
            return $e;
            // Enviar una respuesta JSON si hay un error al enviar el correo
            return response()->json(['status' => 'error', 'message' => 'Hubo un problema al enviar el correo. Por favor, inténtalo de nuevo.']);
        }
    }


    public function enviarCorreoEnvios(Request $request)
    {

        $pais = Pais::where('pais_id',$this->paisDominio)->first();

        if($pais->pais_id == 1){
            $destinatario = 'servi@servipack.com';
        }else if($pais->pais_id == 2){
            $destinatario = 'servi@servipack.com';
        }else if($pais->pais_id == 3){
            $destinatario = 'servi@servipack.com';
        }else if($pais->pais_id == 4){
            $destinatario = 'servi@servipack.com';
        }else if($pais->pais_id == 5){
            $destinatario = 'servi@servipack.com';
        } 
        

        //  $destinatario = 'oswaldo.r.profesional@gmail.com';

        $date = Carbon::now()->format('d/m/Y H:i');
        $name = $request->nombre;
        $email = $request->email;
        $phone = $request->telefono;
        $comments = $request->comentarios;
        $condiciones_uso = $request->avisoLegal;
        $condiciones_comerciales = $request->condiciones;

        
      
        $remitente = ['address' => $email, 'name' => $name];
        try {
            // Crear la instancia de la clase Contacto y enviar el correo
            Mail::to($destinatario)
                ->send(new Envios($name, $email, $phone, $comments, $condiciones_uso, $condiciones_comerciales, $date));

            // Enviar una respuesta JSON si el correo se envió correctamente
            return response()->json(['status' => 'success', 'message' => 'Correo enviado correctamente']);
        } catch (\Exception $e) {
            return $e;
            // Enviar una respuesta JSON si hay un error al enviar el correo
            return response()->json(['status' => 'error', 'message' => 'Hubo un problema al enviar el correo. Por favor, inténtalo de nuevo.']);
        }
    }

    public function enviarCorreoCorporativos(Request $request)
    {

        $pais = Pais::where('pais_id',$this->paisDominio)->first();

        if($pais->pais_id == 1){
            $destinatario = 'c.servi@servipack.com';
        }else if($pais->pais_id == 2){
            $destinatario = 'c.servi@servipack.com';
        }else if($pais->pais_id == 3){
            $destinatario = 'c.servi@servipack.com';
        }else if($pais->pais_id == 4){
            $destinatario = 'servi@servipack.com';
        }else if($pais->pais_id == 5){
            $destinatario = 'c.servi@servipack.com';
        } 
        
        // $destinatario = 'oswaldo.r.profesional@gmail.com';

        $date = Carbon::now()->format('d/m/Y H:i');
        $email = $request->email;
        $phone = $request->telefono;
        $asunto = $request->asunto;
        $condiciones_uso = $request->avisoLegal;
        $condiciones_comerciales = $request->condiciones;
        $asunto_text = $request->asunto_text;
        
        
      
        try {
            // Crear la instancia de la clase Contacto y enviar el correo
            Mail::to($destinatario)
                ->send(new Corporativos($email, $phone, $asunto, $condiciones_uso, $condiciones_comerciales, $asunto_text, $date));

            // Enviar una respuesta JSON si el correo se envió correctamente
            return response()->json(['status' => 'success', 'message' => 'Correo enviado correctamente']);
        } catch (\Exception $e) {
            return $e;
            // Enviar una respuesta JSON si hay un error al enviar el correo
            return response()->json(['status' => 'error', 'message' => 'Hubo un problema al enviar el correo. Por favor, inténtalo de nuevo.']);
        }
    }
    public function enviarCorreoFranquciados(Request $request)
    {

        $pais = Pais::where('pais_id',$this->paisDominio)->first();

        if($pais->pais_id == 1){
            $destinatario = 'c.servi@servipack.com';
        }else if($pais->pais_id == 2){
            $destinatario = 'c.servi@servipack.com';
        }else if($pais->pais_id == 3){
            $destinatario = 'c.servi@servipack.com';
        }else if($pais->pais_id == 4){
            $destinatario = 'servi@servipack.com';
        }else if($pais->pais_id == 5){
            $destinatario = 'c.servi@servipack.com';
        } 
        
        // $destinatario = 'oswaldo.r.profesional@gmail.com';

        // return $destinatario;
        $date = Carbon::now()->format('d/m/Y H:i');
        $email = $request->email;
        $phone = $request->telefono;
 
        $condiciones_uso = $request->avisoLegal;
        $condiciones_comerciales = $request->condiciones;

        
      
        try {
            // Crear la instancia de la clase Contacto y enviar el correo
            Mail::to($destinatario)
                ->send(new Franquiciados($email, $phone, $condiciones_uso, $condiciones_comerciales, $date));

            // Enviar una respuesta JSON si el correo se envió correctamente
            return response()->json(['status' => 'success', 'message' => 'Correo enviado correctamente']);
        } catch (\Exception $e) {
            return $e;
            // Enviar una respuesta JSON si hay un error al enviar el correo
            return response()->json(['status' => 'error', 'message' => 'Hubo un problema al enviar el correo. Por favor, inténtalo de nuevo.']);
        }
    }
    public function enviarCorreoProgreso(Request $request)
    {

        $destinatario = 'servi@servipack.com';

        
        // $destinatario = 'oswaldo.r.profesional@gmail.com';

        // return $destinatario;
        $date = Carbon::now()->format('d/m/Y H:i');
        $email = $request->email;
        $condiciones_uso = $request->avisoLegal;
        $condiciones_comerciales = $request->condiciones;
        $pais = $request->pais;
        
        
      
        try {
            // Crear la instancia de la clase Contacto y enviar el correo
            Mail::to($destinatario)
                ->send(new Progreso($email, $condiciones_uso, $pais, $pais, $date));

            // Enviar una respuesta JSON si el correo se envió correctamente
            return response()->json(['status' => 'success', 'message' => 'Correo enviado correctamente']);
        } catch (\Exception $e) {
            return $e;
            // Enviar una respuesta JSON si hay un error al enviar el correo
            return response()->json(['status' => 'error', 'message' => 'Hubo un problema al enviar el correo. Por favor, inténtalo de nuevo.']);
        }
    }
 
    
    function actualizarpas() {
        // Correo y contraseña directos en el código
        $correo = 'admin@se.com';
        $nuevaContraseña = 'servipack123..';
    
        // Obtener el usuario por correo electrónico
        $usuario = User::where('email', $correo)->first();
    
        if ($usuario) {
            // Actualizar la contraseña utilizando Hash::make
            $usuario->password = Hash::make($nuevaContraseña);
            $usuario->save();
    
            return "Contraseña actualizada con éxito.";
        } else {
            return "Usuario no encontrado.";
        }
    }
}
