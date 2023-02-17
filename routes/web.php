<?php

use App\Http\Controllers\ArticlesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("Articles/All", [ArticlesController::class, "index"])->name("allArticles");
Route::get("Articles/Add", [ArticlesController::class, "create"])->name("addArticle")->middleware("auth");
Route::post("Articles/Store", [ArticlesController::class, "store"])->name("storeArticle")->middleware("auth");
