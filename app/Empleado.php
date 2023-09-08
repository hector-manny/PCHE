<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    protected $fillable = [
        'nombres', 'apellidos', 'cargo', 'dui', 'email'
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

    public function horaExtras(){
        return $this->hasMany(Empleado::class);
    }
}
