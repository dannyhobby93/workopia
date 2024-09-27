<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::resource('jobs', JobController::class);

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
