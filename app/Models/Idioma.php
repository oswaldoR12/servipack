<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    use HasFactory;

    protected $table = 'tidiomas';
    protected $primaryKey = 'idioma_id';
    public $timestamps = false;

    protected $fillable = [
        'descripcion',
    ];

    // Puedes agregar relaciones o atributos adicionales según sea necesario
}
