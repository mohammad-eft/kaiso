<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::get('/ft-header' , function(){
    return view("header");
});
Route::get('/test' , function(){
    return "salam";
});

Route::get('/montazami',function(){
    return view('montazamiView');
});