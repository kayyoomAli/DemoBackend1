<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
// use App\Http\Middleware\UserMiddleware;
use Illuminate\Foundation\Http\Kernel as HttpKernel;


Route::get('/',[AuthController::class,'login']);
Route::get('login',[AuthController::class,'login']);
Route::get('signup',[AuthController::class,'signup']);
Route::post('adminlogin',[AuthController::class,'adminlogin']);
Route::post('insertsignup',[AuthController::class,'insertsignup']);
Route::get('userChangeStatus',[AdminController::class,'userChangeStatus']);
Route::get('logout',[AdminController::class,'logout']);
Route::get('changeStatus', [AdminController::class,'changeStatus']);



Route::group(['middleware' => ['admin_check_login']], function(){
    Route::get('admindashboard',[AdminController::class,'admindashboard']);
    Route::get('userlist',[AdminController::class,'userlist']);
    Route::get('register',[AdminController::class,'register']);
    Route::get('deletelist',[AdminController::class,'deletelist']);
    Route::get('delete/{id}',[AdminController::class,'delete']);
    Route::get('recover/{id}',[AdminController::class,'recover']);

    Route::post('insert',[AdminController::class,'insert']);
    Route::post('update',[AdminController::class,'update']);
    Route::get('adminchangePassword',[AdminController::class,'adminchangePassword']);
    Route::post('adminupdatePassword',[AdminController::class,'adminupdatePassword']);
    Route::get('edit/{id}',[AdminController::class,'edit']);




});

Route::group(['middleware' => ['user_check_login']], function()
{
    Route::get('user-dashboard',[UserController::class,'userDashboard']);
    Route::get('user-profile',[UserController::class,'userProfile']);
    Route::post('user-update',[UserController::class,'update']);
    Route::get('userchangePassword',[UserController::class,'userchangePassword']);
    Route::post('userupdatePassword',[UserController::class,'userupdatePassword']);

});











