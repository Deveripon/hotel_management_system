<?php

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\backendPageController;
use App\Http\Controllers\FrontendPageController;
use Illuminate\Support\Facades\Route;

/* frontend pages route */
Route::get('/',[FrontendPageController::class,'ShowHomePage'])->name('home.page');




//Backend Authenticated routes
Route::post('/login',[AdminAuthController::class,'Login']) -> name('admin.login');



//backend pages route
Route::get('/login',[backendPageController::class,'showLoginPage']) -> name('login.page')->middleware('admin.redirect');
Route::get('/dashboard',[backendPageController::class,'showDashboardPage']) ->
name('dashboard.page')->middleware('admin.auth');
Route::get('/logout',[AdminAuthController::class,'logout']) -> name('admin.logout') -> middleware('admin.auth');