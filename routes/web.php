<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('index');
})->name("homepage")->middleware(["withAuth"]);

Route::any("signup", [AuthController::class, "signup"])->name("signup")->middleware(["noAuth"]);
Route::any("login", [AuthController::class, "login"])->name("login")->middleware(["noAuth"]);
Route::any("logout", [AuthController::class, "logout"])->name("logout")->middleware(["withAuth"]);
