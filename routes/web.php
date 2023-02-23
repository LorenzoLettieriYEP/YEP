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

