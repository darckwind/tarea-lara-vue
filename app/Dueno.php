<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    protected $fillable = [
        'rut','nombre','direccion'
    ];

    /**
     * se le indica a eloquet que tome como clave primaria rut mediante el uso de
     * protected $primaryKey = 'rut'; y al usar public $incrementing = false; se le indica que no es de tipo incremental.
     */

    protected $primaryKey = 'rut';
    public $incrementing = false;


    /**
     * se procede a indicar las reaciones existentes a eloquent
     */

    public function mascotas(){
        return $this->hasMany('App\Mascota');
    }
}
