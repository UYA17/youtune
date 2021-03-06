<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutuneController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/', [YoutuneController::class, 'index']);
Route::get('/choice', [YoutuneController::class, 'choose']);
Route::get('/search', [YoutuneController::class, 'search']);
Route::post('YoutuneController/search', [YoutuneController::class, 'outsidePage']);
Route::post('YoutuneController.search', [YoutuneController::class, 'search']);
Route::get('/mypage', [YoutuneController::class, 'mypage']);