<?php

use App\Http\Controllers\LauraController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PostController::class, 'index']);
