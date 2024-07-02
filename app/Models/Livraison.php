<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $fillable=[
        'code',
        'etat',
        'commandes_id',
    ];
    public function commande(){
        return $this->hasMany(Commande::class);
    }
}
