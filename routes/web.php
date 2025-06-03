<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'index'])
    ->name('home');

Route::get('/blog',[PageController::class,'blog'])
    ->name('blog');

Route::get('/hobbies',[PageController::class,'hobbies'])
    ->name('hobbies');

Route::get('/impressum',[PageController::class,'impressum'])
    ->name('impressum');

Route::get('/links',[PageController::class,'links'])
    ->name('links');

Route::get('/aboutme',[PageController::class,'aboutme'])
    ->name('aboutme');

Route::get('/start',[PageController::class,'start'])
    ->name('start');
