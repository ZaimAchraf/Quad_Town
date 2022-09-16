<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ServerController;
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



############################## Managers Login Routes Begin ###################################################################
Route::namespace("Admin")->prefix("admin")->name("admin.")->group(function () {

        Route::middleware("guest:admin")->namespace("Auth")->group(function () {
            Route::get("login", [AdminController::Class, "login"])->name("login");
            Route::post("check", [AdminController::Class, "check"])->name("check");
        });

        Route::get("logout", [AdminController::Class, "logout"])->name("logout");

    ############################## Managers Login Routes End #####################################################################

    #############################    Managers Tasks Begin    #####################################################################
    Route::middleware("auth:admin")->group(function () {

        Route::get("dashboard", [AdminController::Class, "index"])->name("dashboard");
        Route::get("orders", [OrderController::Class, "index"])->name("orders");
        Route::get("/", [AdminController::Class, "index"])->name("dashboard");

        Route::get("profile", [ManagerController::Class, "profile"])->name("managers.profile");
        Route::post("update/general", [ManagerController::Class, "updateGeneral"])->name("update.general");
        Route::post("picture/reset", [ManagerController::Class, "resetPicture"])->name("picture.reset");
        Route::post("picture/change", [ManagerController::Class, "changePicture"])->name("picture.change");
        Route::post("changePass", [ManagerController::Class, "changePass"])->name("change_password");

        Route::get("inbox", [ContactController::Class, "inbox"])->name("inbox");
        Route::post("message/delete", [ContactController::Class, "delete"])->name("message.delete");
        Route::post("message/setRead", [ContactController::Class, "setRead"])->name("message.setRead");

        Route::get("newsletter", [NewsletterController::Class, "display"])->name("newsletter");
        Route::post("newsletter/changeState", [VehicleController::Class, "changeState"])->name("newsletter.changeState");


        #################################   Super Admin Tasks Begin    ###########################################################
        Route::middleware(["auth:admin", "isSuper"])->prefix("managers")->group(function () {

            Route::get("/", [ManagerController::Class, "display"])->name("managers.display");
            Route::get("add", [ManagerController::Class, "add"])->name("managers.add");
            Route::post("insert", [ManagerController::Class, "insert"])->name("managers.insert");
            Route::post("delete", [ManagerController::Class, "delete"])->name("managers.delete");
            Route::post("changeRole", [ManagerController::Class, "changeRole"])->name("managers.changeRole");

        });
        #################################   Super Admin Tasks End    #############################################################

        #################################   Editor Tasks Begin    ################################################################
        Route::middleware(["auth:admin", "isEditor"])->group(function () {


        });
        #################################   Editor Tasks Begin    ################################################################

        #################################   Moderator Tasks Begin  ###############################################################


        Route::prefix("vehicles")->group(function (){

            Route::get("/all",[VehicleController::class,"index"])->name("vehicle.index");
            Route::get("/",[VehicleController::class,"index"])->name("vehicle.index");
            Route::get("/add",[VehicleController::class,"create"])->name("vehicle.create");
            Route::post("/store-vehicle",[VehicleController::class,"store"])->name("vehicle.store");
            Route::get("/edit-vehicle/{id}",[VehicleController::class,"edit"])->name("vehicle.edit");
            Route::post("/update-vehicle/{id}",[VehicleController::class,"update"])->name("vehicle.update");
            Route::get("/destroy/{id}",[VehicleController::class,"destroy"])->name("vehicle.destroy");
        });

        #################################   Moderator Tasks End    ###############################################################


    });
    #############################    Managers Tasks End    #######################################################################
});
