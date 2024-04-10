<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class CmsLoginController extends Controller
{
    use AuthenticatesUsers;

    // Resto de tu controlador
    public function index(Request $request)
    {

        $baseUrl = $request->getSchemeAndHttpHost();

        // Verificar si el usuario ya está autenticado
        if(auth()->check()) {
            return redirect()->route('cms.dashboard');
        }

        return view('cms.auth.login', compact('baseUrl'));
    }

    public function dashboard(Request $request)
    {
        $user = Auth::user();
        $baseUrl = $request->getSchemeAndHttpHost();
        return view('cms.auth.inicio', compact('baseUrl','user'));

    }
    public function calendario(Request $request)
    {
        $user = Auth::user();
        $baseUrl = $request->getSchemeAndHttpHost();
        return view('cms.calendario.index', compact('baseUrl','user'));

    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $usuario_activo = User::where('email', $credentials['email'])->first();
        if ($usuario_activo) {
            if (!$usuario_activo->activo) {
                $mensajes["mensajes"] = "usuario_inactivado";
                return response()->json($mensajes);
            }
        }

        if (!empty($usuario_activo->agencias[0])) {
            if (!$usuario_activo->agencias[0]->activo) {
                $mensajes["mensajes"] = "usuario_agencia";
                return response()->json($mensajes);
            }
        }

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $mensajes["mensajes"] = "inicio_exitoso";
            return response()->json($mensajes);
        }

        $this->incrementLoginAttempts($request);

        $mensajes["mensajes"] = "inicio_fallido";
        return response()->json($mensajes);
    }
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        $baseUrl = $request->getSchemeAndHttpHost();
        return redirect('/cms');
    }
    public function registrarUsuario()
    {
        echo 1;

        // Crea un nuevo usuario
        $usuario = new User;
        $usuario->nombres = "Oswaldo";
        $usuario->apellidos = "Rivas";
        $usuario->email = "oswaldo@gmail.com";
        $usuario->password = Hash::make("123123123");
        // Completa los otros campos del usuario si es necesario
        // Guarda el usuario en la base de datos
        $usuario->save();
        return $usuario;
        // Puedes personalizar la lógica de redirección o respuesta según tus necesidades
        return redirect()->route('inicio')->with('success', 'Usuario registrado correctamente');
    }

  

    
}
