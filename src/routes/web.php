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


Route::post("/register", [ContactController::class, "signUp"]);
Route::get("/", [ContactController::class, "contact"]);
Route::post("/", [ContactController::class, "toConfirm"]);
Route::get("/confirm", [ContactController::class, "confirm"]);
Route::post("/confirm", [ContactController::class, "submit"]);
Route::get("/thanks", [ContactController::class, "thanks"]);


Route::middleware("auth")->group(function(){
    Route::get("/admin", [ContactController::class, "admin"]);
    Route::get("/search", [ContactController::class, "search"]);
    Route::get("reset", [ContactController::class, "admin"]);
});
