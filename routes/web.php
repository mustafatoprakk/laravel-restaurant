<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});


Route::get("register", [UserController::class, "register"])->name("register");
Route::post("register", [UserController::class, "registerAction"])->name("register_action");
Route::get("login", [UserController::class, "login"])->name("login");
Route::post("login", [UserController::class, "loginAction"])->name("login_action");
Route::get("logout", [UserController::class, "logout"])->name("logout");

Route::middleware(["auth", "admin"])->group(function () {   // admin -> yeni yaptığım middleware
    Route::get("/admin", [AdminController::class, "index"])->name("adminIndex");
    
});
