<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/test', function (){
    return view('test');
});
Route::get('/header', function (){
    return view('/admin/layout/header');
});
Route::get('/banner', function (){
    return view('/admin/layout/banner');
});
Route::get('/logIn', function (){
    return view('/logIn');
});
Route::get('/signUp', function (){
    return view('/signUp');
});

