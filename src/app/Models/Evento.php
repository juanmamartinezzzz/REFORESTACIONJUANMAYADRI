<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    protected $fillable = [
        'usuario_id', 'titulo', 'descripcion', 'ubicacion', 
        'tipo_terreno', 'tipo_evento', 'fecha_evento', 'estado', 'imagen'
    ];

    // El usuario que creó el evento
    public function anfitrion() {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    // Los usuarios que participan
    public function participantes() {
        return $this->belongsToMany(Usuario::class, 'evento_usuario', 'evento_id', 'usuario_id');
    }
}
