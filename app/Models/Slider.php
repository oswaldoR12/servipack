<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Slider extends Authenticatable
{
    use Notifiable;

    protected $table = 'tslider'; // Nombre de la tabla en la base de datos
    
    protected $primaryKey = 'slider_id'; // Clave primaria de la tabla

    protected $fillable = [
       'slider_id',
       'titulo',
       'descripcion',
       'slug',
       'idioma_id',
       'galeria_id_d',
       'galeria_id_m',
       'pais_id',
       'pais_id',
       'estatus',
       'url',
       'orden'
        // Otros campos que desees incluir
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id', 'pais_id');
    }
    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'idioma_id', 'idioma_id');
    }
    public function galeriaD()
    {
        return $this->belongsTo(Galeria::class, 'galeria_id_d', 'galeria_id');
    }

    public function galeriaM()
    {
        return $this->belongsTo(Galeria::class, 'galeria_id_m', 'galeria_id');
    }
    
}
