<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {
    Route::resource('articles', App\Http\Controllers\Editor\Article\ArticleController::class);
    Route::resource('categories', App\Http\Controllers\Editor\Category\CategoryController::class);
    Route::resource('tags', App\Http\Controllers\Editor\Tag\TagController::class);
    Route::resource('areas', App\Http\Controllers\Editor\Area\AreaController::class);
});
