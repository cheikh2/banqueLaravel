<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Moral extends Model
{
    protected $fillable = [
        'nomEmpl',
        'ninea',
        'rc',
        'raisonSocial',
        'adressEmpl',    
    ];

    public function compte(){
        return $this->hasMany('App\Compte');
    }
}
