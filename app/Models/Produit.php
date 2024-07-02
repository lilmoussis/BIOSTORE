<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'vertu',
        'volume',
        'type',
        'poids',
        'photo',
        'stock',
        'prix',
    ];
    public function commande(){
        return $this->belongsTo(Commande::class);
    }
}
