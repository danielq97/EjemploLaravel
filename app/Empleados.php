<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //Scope
    public function scopeNombre($query,$Nombre){
       return $query->where('Nombre','LIKE',"$Nombre%");
    }
}
