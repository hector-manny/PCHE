<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoraExtra extends Model
{
    protected $fillable = [
        'nombres', 'apellidos', 'cargo', 'correo',
    ];

    public function empleados(){
        return $this->belongsTo(Empleado::class);
    }
}
