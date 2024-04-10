<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class ApiCmsCalendarioController extends Controller
{
    

    public function calendario()
    {
        $datos= json_decode(file_get_contents('php://input'), TRUE);
        return $datos;

    }
    
    
  
    function actualizarpas() {
        // Correo y contraseña directos en el código
        $correo = 'admin@se.com';
        $nuevaContraseña = 'servipack123..';
    
        // Obtener el usuario por correo electrónico
        $usuario = Usuario::where('correo', $correo)->first();
    
        if ($usuario) {
            // Actualizar la contraseña utilizando Hash::make
            $usuario->contraseña = Hash::make($nuevaContraseña);
            $usuario->save();
    
            return "Contraseña actualizada con éxito.";
        } else {
            return "Usuario no encontrado.";
        }
    }
    
}
