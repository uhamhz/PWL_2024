<?php

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

Route::get('/hello', [App\Http\Controllers\WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about']);

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($post, $comment) {
    return 'Post ke-' . $post . ' Komentar ke-' . $comment;
});

Route::get('/articles/{id}', [App\Http\Controllers\ArticleController::class, 'articles']);

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('photos', App\Http\Controllers\PhotoController::class);

Route::get('/greeting', [App\Http\Controllers\WelcomeController::class, 'greeting']);
