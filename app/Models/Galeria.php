<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;

    protected $table = 'tgaleria';
    protected $primaryKey = 'galeria_id';
    public $timestamps = true;

    protected $fillable = [
        'ruta',
        'categoria_id',
        'estatus',
        'titulo',
        'slug',
        'pais_id',
    ];

    /**
     * Relación con el modelo de Pais
     */
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id', 'pais_id');
    }
}
