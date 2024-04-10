<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;

    protected $table = 'tcalendario'; // nombre de la tabla en la base de datos

    protected $primaryKey = 'calendario_id'; // clave primaria de la tabla

    protected $fillable = [
        'month',
        'day',
        'year',
        'tipo',
        'pais_id',
        'rutas_id',
        
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id', 'pais_id');
    }
    public function ruta()
    {
        return $this->belongsTo(RutaPais::class, 'rutas_id', 'rutas_id');
    }
}
