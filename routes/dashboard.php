<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\ProductsController;
use App\Http\Controllers\Dashboard\CategoriesController;

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

Route::get('dashboard', function () {
    return redirect()->route('dashboard.home');
});

Route::group([
    'middleware' => ['web','auth:admin'],
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'namespace' => 'App\Http\Controllers\Dashboard',
], function () {

    Route::get('/home', function () {
        return view('dashboard.index');
    })->name('home');

    Route::resources([
        'categories' => CategoriesController::class,
        'products' => ProductsController::class,
        'user' => UserController::class,
        'role' => RoleController::class,


    ]);

    

});
