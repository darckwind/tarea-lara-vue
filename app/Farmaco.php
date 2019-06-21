<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmaco extends Model
{
    protected $fillable = [
        'coste','nombre','gramaje'
    ];
    protected $primaryKey = 'nombre';
    public $incrementing = false;

    public function receta(){
        return $this->hasMany('App\Receta');
    }
}
