<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/index' , [ PostController::class , 'index' ])->name('posts.index');

Route::get('/create' , [ PostController::class , 'create' ])->name('posts.create');
Route::post('/store' , [ PostController::class , 'store' ])->name('posts.store');

Route::middleware([ 'can:view,post' ])->group(function() {

    Route::get('/{post}/edit' , [ PostController::class , 'edit'])->name('posts.edit');
    
});
Route::middleware([ 'can:delete,post' ])->group(function() {

    Route::delete('/{post}/destroy' , [ PostController::class , 'destroy' ])->name('posts.destroy');
    
});
Route::middleware([ 'can:update,post' ])->group(function() {
    
    Route::put('/{post}/update' , [ PostController::class , 'update' ])->name('posts.update');
    
});