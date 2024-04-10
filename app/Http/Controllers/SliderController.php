<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SliderController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function inicio()
    {
        $sliders = Slider::orderBy('orden', 'asc')->get();
        $res = [];
        foreach ($sliders as $key => $value) {
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
            $res[] = $valor;
        }
        return response()->json($res);
    }

    public function inicioPais($subdomain) 
    {
        return view('web.home');
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id', 'pais_id');
    }
    
}
