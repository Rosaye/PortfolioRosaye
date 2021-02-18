<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FirstController::class, 'index']);

Route::get('/about', [FirstController::class, 'about']);

Route::get('/admin', [FirstController::class, 'admin']);

Route::get('/projets/{id}', [FirstController::class, 'projets'])->where('id', '[0-9]+');