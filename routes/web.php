<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $specials = Category::where("name", "breakfast")->first();
    return view('index', compact("specials"));
});


Route::get("register", [UserController::class, "register"])->name("register");
Route::post("register", [UserController::class, "registerAction"])->name("register_action");
Route::get("login", [UserController::class, "login"])->name("login");
Route::post("login", [UserController::class, "loginAction"])->name("login_action");
Route::get("logout", [UserController::class, "logout"])->name("logout");

Route::middleware(["auth", "admin"])->group(function () {   // admin -> yeni yaptığım middleware
    Route::get("/admin", [AdminController::class, "index"])->name("adminIndex");
    Route::resource("/categories", CategoryController::class);
    Route::resource("/menus", MenuController::class);
    Route::resource("/tables", TableController::class);
    Route::resource("/reservations", ReservationController::class);
});


Route::get('/category', [FrontendCategoryController::class, "index"])->name("customer.categories.index");
Route::get('/category/{category}', [FrontendCategoryController::class, "show"])->name("customer.categories.show");
Route::get('/menu', [FrontendMenuController::class, "index"])->name("customer.menus.index");
Route::get('/reservation/step-one', [FrontendReservationController::class, "stepOne"])->name("reservations.stepOne");
Route::post('/reservation/step-one', [FrontendReservationController::class, "storeStepOne"])->name("reservations.store.stepOne");
Route::get('/reservation/step-two', [FrontendReservationController::class, "stepTwo"])->name("reservations.stepTwo");
Route::post('/reservation/step-two', [FrontendReservationController::class, "storeStepTwo"])->name("reservations.store.stepTwo");
Route::get("/thankyou", function () {
    return view("thankyou");
})->name("thankyou");
