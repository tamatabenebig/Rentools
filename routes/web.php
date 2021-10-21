<?php

use App\Http\Controllers\PostController;
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

// Route::get('/connexion', function () {
//     return view('connexion');
// })->name('connexion');

Route::get('/', [PostController::class,'index']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/contact', [PostController::class, 'contact']);

Route::get('/inscription', [PostController::class, 'inscription']);

Route::get('/connexion', [PostController::class, 'connexion'])->name('connexion');

Route::get('/categorie', [PostController::class, 'categorie']);