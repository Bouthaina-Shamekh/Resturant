<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\MailController;
use App\Http\Controllers\Site\MainController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\UsersController;
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

    Route::get('restaurant_address', [MainController::class, 'restaurant'])->name('site.restaurant_address');

    Route::get('about', [MainController::class, 'about'])->name('site.about');

    Route::put('/users/{id}/updateProfile', [UsersController::class, 'updateProfile'])->name('users.updateProfile');

    Route::get('send-mail', [MailController::class, 'send']);
    Route::get('contact', [MailController::class, 'contact'])->name('site.contact');
    Route::post('contact', [MailController::class, 'contact_data'])->name('site.contact_data');

    Route::get('bills', [MainController::class, 'bills'])->name('site.bills');

    Route::post('assign-delivery/{orderId}', [MainController::class, 'assignDelivery'])->name('assign.delivery');


});


Route::view('not_allowed', 'not_allowed');



require __DIR__.'/dashboard.php';

require __DIR__.'/delivery.php';
