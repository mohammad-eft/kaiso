<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test' , function(){
    return "salam";
});

Route::get('/montazami',function(){
    return view('montazamiView');
});