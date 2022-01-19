<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/management', function () {
    return view('backOffice.dashboard');
});

Route::namespace("Admin")->prefix("management")->name("admin.")->group(function () {

    Route::middleware("guest:admin")->namespace("Auth")->group(function () {
        Route::get("login", [AdminController::Class, "login"])->name("login");
        Route::post("check", [AdminController::Class, "check"])->name("check");
    });

    Route::middleware("auth:admin")->namespace("Auth")->group(function () {
        Route::get("dashboard", [AdminController::Class, "index"])->name("dashboard");
    });

});

Route::get("management/categories", [CategoryController::Class, "index"])->name("index.category");
Route::get("management/create-category", [CategoryController::Class, "create"])->name("create.category");
Route::post("management/store-category", [CategoryController::Class, "store"])->name("store.category");
Route::get("management/edit-category/{id}", [CategoryController::Class, "edit"])->name("edit.category");
Route::post("management/update-category/{id}", [CategoryController::Class, "update"])->name("update.category");
Route::get("management/destroy-category/{id}", [CategoryController::Class, "destroy"])->name("destroy.category");

