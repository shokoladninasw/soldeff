<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ExitController;

Route::get('/main', [MainController::class, 'index'])->name('main');
Route::get('/reg', [RegController::class, 'show'])->name('reg');
Route::post('/reg', [RegController::class, 'share'])->name('reg.share');
Route::get('/log', [LogController::class, 'show'])->name('log');
Route::post('/log', [LogController::class, 'share'])->name('log.share');
Route::post('/main', [ExitController::class, 'destroy'])->name('logout');
Route::get('/forum', [MainController::class, 'show'])->name('forum');
Route::post('/share', [MainController::class, 'share'])->name('forum.share');
Route::get('/share', [MainController::class, 'poster'])->name('poster');
Route::get('/addit', [MainController::class, 'added'])->name('addit');
Route::post('/forum/{id}/compl', [MainController::class, 'compl'])->name('main.compl');
Route::get('/myself', [MainController::class, 'myself'])->name('myself');
Route::get('/forum/{main}', [MainController::class, 'showPost'])->name('forum.post');
Route::post('/forum/{main}/comment', [MainController::class, 'addComment'])->name('comment.add');