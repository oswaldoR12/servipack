<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    protected $table = 'topiniones';

    protected $primaryKey = 'opinion_id';

    protected $fillable = [
        'nombre',
        'opinion',
        'estatus',
        'idioma_id',
        'galeria_id',
        'pais_id',
        'orden',
    ];

    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'idioma_id');
    }

    public function galeria()
    {
        return $this->belongsTo(Galeria::class, 'galeria_id');
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id');
    }
}
