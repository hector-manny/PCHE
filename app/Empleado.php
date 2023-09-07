<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    protected $fillable = [
        'nombres', 'apellidos', 'cargo', 'correo',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function horario(){
        return $this->hasOne(Horario::class);
    }
}
