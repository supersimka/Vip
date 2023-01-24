<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'homepage']);
Route::get('/recept', [HomeController::class, 'receptParent']);
Route::get('/recept/{alias}', [HomeController::class, 'recept']);
Route::get('/catalog', [HomeController::class, 'catalogtParent']);
Route::get('/catalog/{slug}', [HomeController::class, 'catalog']);
Route::get('/catalog/child', [HomeController::class, 'catalogChildParent']);
Route::get('/catalog/child/{slug}', [HomeController::class, 'catalogClild']);
Route::get('/keywords/{slug}', [HomeController::class, 'keywords']);
Route::get('/products/{slug}', [HomeController::class, 'products']);
Route::get('/search', [HomeController::class, 'search']);
Route::get('/getSection', [HomeController::class, 'getSection']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
