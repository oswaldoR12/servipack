<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'tpais';
    protected $primaryKey = 'pais_id';
    public $timestamps = false;

    protected $fillable = [
        'descripcion',
        'slug',
        'class'
    ];
    // Define cualquier otra relación o atributo según sea necesario
}
