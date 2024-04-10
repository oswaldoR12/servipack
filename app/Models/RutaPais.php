<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutaPais extends Model
{
    use HasFactory;
    protected $table = 'trutas_pais';
    protected $primaryKey = 'rutas_id';
    public $timestamps = false;

    protected $fillable = [
        'descripcion',
        'pais_id_origen',
        'pais_id_destino',
        'activo',
        'inversa'
    ];
    // Define cualquier otra relación o atributo según sea necesario

    public function paisOrigen()
    {
        return $this->belongsTo(Pais::class, 'pais_id_origen', 'pais_id');
    }

    public function paisDestino()
    {
        return $this->belongsTo(Pais::class, 'pais_id_destino', 'pais_id');
    }

    // Consultar todos o uno
    public function obtenerRutasActivas($data)
    {
        $query = $this->where('activo', '!=', '2');

        // Verifica si se proporciona el filtro por rutas_id y si tiene un valor
        if (isset($data["rutas_id"]) && $data["rutas_id"] !== '') {
            $query->where('rutas_id', $data["rutas_id"]);
        }

        return $query->get();
    }


    // Función para modificar colores de estatus
    public function modificarRutasEstatus($data)
    {
        $id = $data["rutas_id"];

        // Busca el registro por el ID
        $ruta = RutaPais::find($id);

        // Verifica si se encontró el registro
        if ($ruta) {
            // Actualiza las columnas con los datos proporcionados
            $ruta->update($data);
            return true;
        } else {
            return false;
        }
    }
}
