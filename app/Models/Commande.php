<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable =[
        'code',
        'quantite',
        'produits_id',
        'distributeurs_id',
        'etat',
    ];
    public function produit(){
        return $this->hasMany(Produit::class);
    }
    public function distributeur(){
        return $this->hasMany(Distributeur::class);
    }
    public function livraison(){
        return $this->belongsTo(Livraison::class);
    }
}
