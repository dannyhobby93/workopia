<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('jobs', JobController::class)
    ->middleware(['auth'])
    ->only(['create', 'store', 'edit', 'update', 'destroy']);

Route::resource('jobs', JobController::class)
    ->except(['create', 'store', 'edit', 'update', 'destroy']);

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');













// Route::get('/test', function (Request $request) {
//     return [
//         'method' => $request->method(),
//         'url' => $request->url(),
//         'fullurl' => $request->fullUrl(),
//         'path' => $request->path(),
//         'ip' => $request->ip(),
//         'useragent' => $request->userAgent(),
//         'header' => $request->header(),
//     ];
// });

// Route::get('/users', function (Request $request) {
//     return $request->all();
// });

// Route::get('/posts/{id}', function (string $id) {
//     return "Post " . $id;
// });
// ->whereAlpha('id');
// ->where('id', '[0-9]+');

// Route::get('/posts/{id}/comments/{comment}', function (string $id, string $comment) {
//     return "Post " . $id . " comment " . $comment;
// });

// // Route::any()
// Route::match(['get', 'post'], '/submit', function () {
//     return "Job submitted";
// });
