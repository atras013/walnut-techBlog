<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/user/{user}/profile' , [ UserController::class  , 'show'])->middleware(['can:view,user'])->name('users.profile.show');
Route::put('/user/{user}/profile/update' , [ UserController::class  , 'update'])->name('users.update');