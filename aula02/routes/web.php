<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/users/{params}/{params2}', function ($params, $params2) {
    return $params . ' ' . $params2;
});

Route::prefix('usuarios')->group(function() {
    Route::get('/edit', function(){
        return 'edit';
    });

    Route::get('/delete', function(){
            return 'delete';
    });

    });

Route::get('/dados-de-usuarios/{user}', function(\App\Models\User $user){
    return $user;
});
