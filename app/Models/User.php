<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'tusuarios'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'usuario_id'; // Clave primaria de la tabla

    protected $fillable = [
        'usuario_perfil_id',
        'tipo_documento',
        'documento',
        'nombres',
        'apellidos',
        'email',
        'password',
        'email_verified_at',
        'retencion',
        'activo',
        'contribuyente',
        // Otros campos que desees incluir
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function perfil()
    {
        return $this->belongsTo('App\Perfil', 'usuario_perfil_id', 'usuario_perfil_id');
    }
}
