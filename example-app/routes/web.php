<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\PerPage;
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


Route::get('/companies', [CompaniesController::class, 'companies'])
    ->middleware('per_page');

Route::get('/search', [SearchController::class, 'getSearch'])
    ->middleware('name','per_page');

Route::get('/trainers', [TrainerController::class, 'getTrainers'])->middleware('trainer_logic');

Route::get('/categories', [CategoriesController::class,'categories']);
Route::get('/categoriescompanies', [CategoriesController::class,'categoriescompanies']);
Route::fallback(function () {
    return view('404');
})->name('NotFound');

Route::get('/error', function () {
    return view('error');
})->name('Error');
