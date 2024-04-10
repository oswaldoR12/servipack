<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $table = 'tseccion';
    protected $primaryKey = 'seccion_id';
    public $timestamps = true;

    protected $fillable = [

        'titulo',
        'descripcion',
        'html',
        'idioma_id',
        'galeria_id_back',
        'galeria_id_ico',
        'pais_id',
        'boton_1',
        'url_1',
        'slug_1',
        'boton_2',
        'url_2',
        'slug_2',
        'estatus',
        'orden',

    ];

    /**
     * Relación con el modelo de Pais
     */
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id', 'pais_id');
    }
    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'idioma_id', 'idioma_id');
    }
    public function galeriaBack()
    {
        return $this->belongsTo(Galeria::class, 'galeria_id_back', 'galeria_id');
    }
    public function galeriaIco()
    {
        return $this->belongsTo(Galeria::class, 'galeria_id_ico', 'galeria_id');
    }
}
