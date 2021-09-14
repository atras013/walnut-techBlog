<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/index' , [ CommentController::class , 'index'])->name('comments.index');
