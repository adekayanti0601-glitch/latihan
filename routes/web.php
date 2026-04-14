<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingPageController;

Route::get('/', [LandingPageController::class, 'index']); 
