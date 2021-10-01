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

Route::group(['middleware'=>'auth'],function(){
    Route::get('dashboard','HomeController@dashboard')->name('dashboard');
});
Route::group(['middleware'=>['auth','role:editor']],function(){
    Route::get('role',function(){
        dd('hi');
    });
});






require __DIR__.'/auth.php';
