<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;
use App\Http\controllers\CategoryController;
use App\Http\controllers\UserController;
use App\Http\Middleware\storeUser;

Route::get('/', function () {
    return view('home');
});



Route::get('/ft-header' , function(){
    return view("header");
});
Route::get('/test', function () {
    return "salam";
});

Route::get('/montazami', function () {
    return view('montazamiView');
});


Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'controller' => UserController::class
] , function(){
    Route::get('/create' , 'sing_up')->name("create");
    Route::post('/store' , 'store')->name('store');
    Route::get('/login' , 'document_login')->name('login');
    Route::post('/store/login' , 'store')->middleware(storeUser::class)->name('store_login');   
    Route::get('/profile' , 'profile')->name('profile');
    Route::get('/delete/{user}' , 'delete')->name('delete');
    Route::get('/edit/{user}' , 'edit')->name('edit');
    Route::post('/update' , 'update')->name('update');
    Route::any('/send/code' , 'sendCode')->name('send_code');
    Route::any('/logout' , 'log_out')->name('log_out');
    Route::post('/delete/code' , 'del_code')->name('del_code');
});
Route::get('/olyafam', function () {
    return view('olyafam');
});
Route::get('/artan', function () {
    return view('artan');
});
