<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get("/register", [ContactController::class, "register"]);
Route::post("/register", [ContactController::class, "signUp"]);


Route::get("/login", [ContactController::class, "login"])->name("login");
Route::post("/login", [ContactController::class, "toAdmin"]);


Route::get("/", [ContactController::class, "contact"]);
Route::post("/", [ContactController::class, "toConfirm"]);


Route::get("/confirm", [ContactController::class, "confirm"]);
Route::post("confirm", [ContactController::class, "submit"]);


Route::get("/thanks", [ContactController::class, "thanks"]);


Route::get("/admin", [ContactController::class, "admin"]);
