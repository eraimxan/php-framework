<?php

use App\Controllers\HomeController;
use App\Controllers\PostControllers;
use Somecode\Framework\Routing\Route;

return [
    Route::get('/', [HomeController::class, 'index']),
    Route::get('/posts/{id:\d+}', [PostControllers::class, 'show']),
];
