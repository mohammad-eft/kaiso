<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/ft-header' , function(){
    return view("ftheader");
});
Route::get('/test' , function(){
    return "salam";
});

Route::get('/montazami',function(){
    return view('montazamiView');
});