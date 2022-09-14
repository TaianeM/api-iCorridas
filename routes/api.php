<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\CodeInviteController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/*
Routes API users
*/
Route::get('/users',[UserController::class, 'index'])->name("users.index");
Route::post('/users/store',[UserController::class, 'store'])->name("users.store");
Route::post('/users/update/{id}',[UserController::class, 'update'])->name("users.update");
Route::put('/users/edit/{id}',[UserController::class, 'edit'])->name("users.edit");
Route::delete('/users/destroy/{id}',[UserController::class,'destroy'])->name("users.delete");

Route::get('/code_invite',[CodeInviteController::class, 'index'])->name("code_invite.index");
Route::post('/code_invite/store',[CodeInviteController::class, 'store'])->name("code_invite.store");
