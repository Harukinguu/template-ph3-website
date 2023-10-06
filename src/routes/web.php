<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;

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

// ハンズオン用
Route::get('/about', function () {
    // return '<h1>このブログについてだお</h1>';
    return view('about');
});

// MyBBS用
Route::get('/post', [PostController::class , 'index'])
    ->name('post.index');

Route::get('/post/posts/{post}', [PostController::class , 'show'])
    ->name('post.show')
    ->where('post', '[0-9]+');

Route::get('/post/posts/create', [PostController::class , 'create'])
    ->name('post.create');
Route::post('/post/posts/store', [PostController::class , 'store'])
    ->name('post.store');

Route::get('/post/posts/{post}/edit', [PostController::class , 'edit'])
    ->name('post.edit')
    ->where('post', '[0-9]+');
Route::patch('/post/posts/{post}/update', [PostController::class , 'update'])
    ->name('post.update')
    ->where('post', '[0-9]+');

Route::delete('/post/posts/{post}/destroy', [PostController::class , 'destroy'])
    ->name('post.destroy')
    ->where('post', '[0-9]+');

Route::post('/post/posts/{post}/comments', [CommentController::class , 'store'])
    ->name('comment.store')
    ->where('post', '[0-9]+');

Route::delete('/post/comments/{comment}/destroy', [CommentController::class , 'destroy'])
    ->name('comment.destroy')
    ->where('comment', '[0-9]+');


// カリキュラム用

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'create'])
    ->middleware(['auth','admin'])
    ->name('admin.create');

Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/quizzes', [UserController::class, 'quiz'])
    ->name('user.quiz');

Route::get('/quizzes/{id}', [UserController::class, 'q_show'])
    ->name('user.q_show');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
