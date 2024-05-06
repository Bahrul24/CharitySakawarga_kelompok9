<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('tema.main');
});

Route::get('/profil',function(){
    return view('tema.donate');
});

Route::resource('/profil',\App\Http\controllers\profilController::class);
Route::resource('/profil/tambah',\app\Http\controllers\profilController::class);
