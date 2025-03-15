<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\MediaController;
use App\Http\Controllers\Dashboard\OfferController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\AdminsController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\ProductsController;
use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\DeliveriesController;
use App\Http\Controllers\Dashboard\NotificationController;
use App\Http\Controllers\Dashboard\TableController;
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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
Route::get('dashboard', function () {
    return redirect()->route('dashboard.home');
});

Route::group([
    'middleware' => ['web','auth:admin','checkUserGuard'],
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'namespace' => 'App\Http\Controllers\Dashboard',
], function () {


    //  Route::get('/home', HomeController::class);
     Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('tables/chooseTable',[OrderController::class , 'chooseTable'])->name('order.chooseTable');

    Route::resources([
        'categories' => CategoriesController::class,
        'products' => ProductsController::class,
        'users' => UsersController::class,
        'admins' => AdminsController::class,
        'deliveries' => DeliveriesController::class,
        'media' => MediaController::class,
        'user' => UserController::class,
        'role' => RoleController::class,
        'slider' => SliderController::class,
        'offer' => OfferController::class,
        'orders' => OrderController::class,
        'tables' => TableController::class
    ]);
    Route::get('notifications', [NotificationController::class, 'notificationsIndex'])->name('notification.index');

    Route::get('notifications/{id}', [NotificationController::class, 'show'])->name('notification.show');

    Route::post('/notification/clearAll',[NotificationController::class , 'clearAllNotifications'])->name('notification.clearAll');

    Route::get('/setting',[SettingController::class , 'index'])->name('setting.index');
    Route::post('/setting/update',[SettingController::class , 'update'])->name('setting.update');

    Route::get('notifications', [NotificationController::class, 'notificationsIndex'])->name('notification.index');

        Route::get('notifications/{id}', [NotificationController::class, 'show'])->name('notification.show');



});

});
