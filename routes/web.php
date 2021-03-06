<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\FileUploadController;

use App\Http\Controllers\ContactsController;
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

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');


// Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/contact', [PostController::class, 'contact']);

Route::get('/inscription', [PostController::class, 'inscription']);

// Route::get('/connexion', [PostController::class, 'connexion'])->name('connexion');

Route::get('/categorie', [PostController::class, 'categorie']);

Route::get('/rentals', [PostController::class, 'rentals'])->name('rentals');


Auth::routes();

Route::get('/connexion', [App\Http\Controllers\HomeController::class, 'connexion'])->name('connexion');
Route::get('connexion', function(){
    return view('connexion');
})->middleware('auth');

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
  
Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');
// Route::get('contact', 'ContactsController@create')->name('contact.create');
// Route::post('contact', 'ContactsController@store')->name('contact.store');


// Route::get('contact',[ContactsController::class, 'contact']);