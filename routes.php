<?php

use Vision\Facades\Route;
use App\Http\Controllers\TestController;

// print_r('test');
// exit();

Route::get('/test', [TestController::class, 'index']);

Route::controller(TestController::class)->group(function ()
{
    Route::get('/test2', [TestController::class, 'index']);
});
