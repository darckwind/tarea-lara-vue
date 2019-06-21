<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'indicacion','folio'
    ];

    protected $primaryKey = 'chip';

    public function mascota(){
        return $this->belongsTo('App\Mascota');
    }
    public function farmaco(){
        return $this->belongsTo('App\Farmaco');
    }
}
