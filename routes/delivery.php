<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('delivery/', function () {
    return redirect()->route('delivery.home');

});

Route::group([
    'middleware' => ['web','auth:delivery'],
    'prefix' => 'delivery',
    'as' => 'delivery.',
    'namespace' => 'App\Http\Controllers',
], function () {

    Route::get('/home', function () {
        return view('delivery.index');
    })->name('home');

});
