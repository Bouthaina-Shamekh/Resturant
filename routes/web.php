<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Site\MainController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Site\CartController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

Route::group([
    'middleware' => ['web','checkUserGuard'],
], function () {
    Route::get('/', [MainController::class, 'home'])->name('site.index');
});

    Route::get('/getProductsCategory', [MainController::class, 'category'])->name('getProductsCategory');

    Route::get('/product/{id}', [MainController::class, 'product'])->name('site.product');

    Route::post('favorite', [MainController::class, 'favorite'])->name('site.favorite');
    Route::resource('cart', CartController::class);

    Route::post('order', [MainController::class, 'storeOrder'])->name('order.store');
    Route::get('restaurant_address', [MainController::class, 'restaurant_address'])->name('order.restaurant_address');

    Route::get('restaurant_address', [MainController::class, 'restaurant'])->name('site.restaurant_address');

    Route::get('about', [MainController::class, 'about'])->name('site.about');
});


Route::view('not_allowed', 'not_allowed');



require __DIR__.'/dashboard.php';

require __DIR__.'/delivery.php';
