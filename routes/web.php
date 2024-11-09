<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Site\MainController;
use App\Http\Controllers\Dashboard\UserController;

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

Route::group([
    'middleware' => ['web','checkUserGuard'],
], function () {
    Route::get('/', [MainController::class, 'home'])->name('site.index');

    Route::view('not_allowed', 'not_allowed');
});



require __DIR__.'/dashboard.php';

require __DIR__.'/delivery.php';
