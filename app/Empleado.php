<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{


    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
}
