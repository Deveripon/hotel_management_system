<?php

use App\Http\Controllers\FrontendPageController;
use Illuminate\Support\Facades\Route;

/* frontend pages route */
Route::get('/',[FrontendPageController::class,'ShowHomePage'])->name('home.page');