<?php

use App\DomainDrivenDesign\App\Web\Task\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('task')->group(function () {
    Route::get('/', [TaskController::class, 'get']);
    Route::post('/', [TaskController::class, 'create']);
});
