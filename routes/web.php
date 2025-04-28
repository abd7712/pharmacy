<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//index
Route::get("/",[IndexController::class,"index"]);
//admin page
Route::get("/adminPage",[AdminController::class,"admin_page"]);
//admin
Route::get("/admin",[AdminController::class,"admin"]);
//welcome admin
Route::get("/welcomeAdmin",[AdminController::class,"welcome_admin"]);
//create page
Route::get("/createPage",[AdminController::class,"create_page"]);
//create
Route::get("/create",[AdminController::class,"create"]);
//show
Route::get("/show",[AdminController::class,"show"]);
//delete
Route::get("/delete/{id}",[AdminController::class,"delete"]);
//edit page
Route::get("/editPage/{id}",[AdminController::class,"edit_page"]);
//edit
Route::get("/edit/{id}", [AdminController::class, "edit"]); // هذا للـ GET
//description
Route::get("/description/{id}",[AdminController::class,"description"]);
//.............................
//register page
Route::get("/registerPage",[UserController::class,"register_page"]);
//register
Route::get("/register",[UserController::class,"register"]);
//login page
Route::get("/loginPage",[UserController::class,"login_page"]);
//login
Route::get("/login",[UserController::class,"login"]);
//show drugs for users
Route::get("/showC/{id}",[UserController::class,"showC"]);
//description for user
Route::get("/descriptionC/{id}/{id_user}",[UserController::class,"descriptionC"]);
//.............................
//buy
Route::get("/buy/{id}/{id_user}",[PurchasesController::class,"buy"]);







?>
