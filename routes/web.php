<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/recent-files', [PageController::class, 'recent-files'])->name('recent-files');
Route::get('/select-package', [PageController::class, 'select-package'])->name('select-package');
Route::get('/world-agents', [PageController::class, 'world-agents'])->name('world-agents');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/get-key', [PageController::class, 'get-key'])->name('get-key');

