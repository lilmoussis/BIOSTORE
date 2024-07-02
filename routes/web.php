<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DistributeurController;
use App\Http\Controllers\LivraisonController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Models\Distributeur;
use App\Models\Produit;
use Illuminate\Support\Facades\Route;
Route::get('/dashboard', function () {
    return view('Admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {return view('Admin.index');})->name('dashboard');
        Route::resource('commande',CommandeController::class);
        Route::resource('produit',ProduitController::class);
        Route::resource('distributeur',DistributeurController::class);
        Route::resource('livraison',LivraisonController::class);


        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
require __DIR__.'/auth.php';
