<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, "welcome"])->name("welcome");
Route::get("Articles/All", [ArticlesController::class, "index"])->name("allArticles");
Route::get("Articles/Add", [ArticlesController::class, "create"])->name("addArticle")->middleware("auth");
Route::post("Articles/Store", [ArticlesController::class, "store"])->name("storeArticle")->middleware("auth");
Route::get("Articles/Show/{article}", [ArticlesController::class, "show"])->name("showArticle");
Route::get("Articles/Category/{category}", [ArticlesController::class, "categoryFilter"])->name("categoryFilter");
Route::get("Articles/User/{user}", [ArticlesController::class, "userFilter"])->name("userFilter");
Route::get("Career/Apply", [PublicController::class, "careerMenu"])->name("career")->middleware("auth");

Route::patch("Career/Apply/Writer", [PublicController::class, "writerRequest"])->name("writerRequest")->middleware("auth");
Route::patch("Career/Apply/Revisor", [PublicController::class, "revisorRequest"])->name("revisorRequest")->middleware("auth");
Route::patch("Career/Apply/Admin", [PublicController::class, "adminRequest"])->name("adminRequest")->middleware("auth");

Route::get("Admin/Dashboard", [PublicController::class, ("adminZone")])->name("admin-zone");

Route::get("Admin/{request}/setWriter", [PublicController::class,("setWriter")])->name("setWriter");
Route::get("Admin/{request}/denyWriter", [PublicController::class,("denyWriter")])->name("denyWriter");

Route::get("Admin/{request}/setRevisor", [PublicController::class,("setRevisor")])->name("setRevisor");
Route::get("Admin/{request}/denyRevisor", [PublicController::class,("denyRevisor")])->name("denyRevisor");

Route::get("Admin/{request}/setAdmin", [PublicController::class,("setAdmin")])->name("setAdmin");
Route::get("Admin/{request}/denyAdmin", [PublicController::class,("denyAdmin")])->name("denyAdmin");



