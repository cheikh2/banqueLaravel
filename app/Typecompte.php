<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typecompte extends Model
{
    protected $fillable = [
        'libelle',    
    ];

    public function compte(){
        return $this->hasMany('App\Compte');
    }
}
