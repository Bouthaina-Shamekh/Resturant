<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\ProductsController;
use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\SettingController;

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
    'middleware' => ['web','auth:admin','checkUserGuard'],
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
        'users' => UsersController::class,
        'admins' => AdminsController::class,
        'deliveries' => DeliveriesController::class,
        'media' => MediaController::class,
        'user' => UserController::class,
        'role' => RoleController::class,
    ]);

    Route::get('/setting',[SettingController::class , 'index'])->name('setting.index');
    Route::post('/setting/update',[SettingController::class , 'update'])->name('setting.update');

    Route::get('setting/social', [SettingController::class, 'social'])->name('social.index');
    Route::post('setting/social', [SettingController::class, 'update_social'])->name('social.update');




});
