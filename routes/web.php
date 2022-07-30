<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['middleware' => 'App\Http\Middleware\Language'], function () {
    Route::get('/', [HomeController::class, "index"])->name('home');
    Route::get('/home', [HomeController::class, "index"])->name('home');
    Route::get('/about', [HomeController::class, "about"])->name('about');
    Route::get('/channels', [HomeController::class, "channels"])->name('channels');
    Route::get('/contact', [HomeController::class, "contact"])->name('contact');
    Route::get('/settings', [HomeController::class, "settings"])->name('settings');
    Route::get('/checkout/{id}', [HomeController::class, "checkout"])->name('checkout');
    Route::get('/change-lang/{lang}', [HomeController::class, "changeLang"]);

    Route::post('/order', [OrderController::class, "store"]);

    Route::post('/contact', [ContactController::class, "send"])->name('send_contact');

    Route::post('/newsletter', [NewsletterController::class, "subscribe"])->name('newsletter');
});



