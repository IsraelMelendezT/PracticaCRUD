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

Route::get('/israel', function(){
    return view('israel');
});
Route::get('/', 'crud@index');
Route::get('/insert', 'crud@create');
Route::get('/detail/{id}', 'crud@show');
Route::get('/delete/{id}', 'crud@destroy');
Route::get('/crear', 'crud@create');
Route::post('/save', 'crud@store');
Route::post('/update', 'crud@update');

