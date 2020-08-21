<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physique extends Model
{
    protected $fillable = [
        'prenom',
        'nom',
        'adress',
        'email',
        'telephone',
        'sexe',
        'profession',
        'cni',
        'salaire',
        'morals_id',  
    ];

    public function morals(){
        return $this->belongsTo('App\Moral');
    }
}
