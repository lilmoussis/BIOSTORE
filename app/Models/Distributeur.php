<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributeur extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
        'mail',
        'numero',
        'motdepasse',
        'logo',
        'localite',
        'map',
    ];
    public function commande(){
        return $this->belongsTo(Commande::class);
    }
}
