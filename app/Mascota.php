<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable = [
        'chip','nombre','tipo','raza'
    ];
    protected $primaryKey = 'chip';
    public $incrementing = false;

    public function dueno(){
        return $this->belongsTo('App\Dueno');
    }

}
