<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios'; // Forzamos el nombre de la tabla

    protected $fillable = ['nick', 'nombre', 'apellidos', 'email', 'password', 'es_admin'];

    // Relación: Eventos que este usuario ha propuesto (+4 puntos)
    public function eventosPropuestos() {
        return $this->hasMany(Evento::class, 'usuario_id');
    }

    // Relación: Eventos a los que se ha unido (+3 puntos)
    // Necesitaremos una tabla intermedia llamada 'evento_usuario'
    public function participaciones() {
        return $this->belongsToMany(Evento::class, 'evento_usuario', 'usuario_id', 'evento_id');
    }

    // Atributo calculado para el Karma
    public function getKarmaAttribute() {
        $puntos = $this->eventosPropuestos()->count() * 4;
        $puntos += $this->participaciones()->count() * 3;
        // Aquí sumarías +2 por blog y +1 por interacciones en el futuro
        return $puntos;
    }
}