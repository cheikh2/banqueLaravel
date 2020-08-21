<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{

    protected $fillable = ['numAgence','numCompte','rib','montant','dateDebut','dateFin','physiques_id','morals_id', 'typecompte_id',];

    public function morals(){
        return $this->belongsTo('App\Moral');
    }
    public function physiques(){
        return $this->belongsTo('App\Physique');
    }
    public function typecomptes(){
        return $this->belongsTo('App\Typecompte');
    }
}