<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PolicyController;
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
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/about_us', [PageController::class, 'about_us'])->name('about_us');
Route::get('/contact_us', [PageController::class, 'contact_us'])->name('contact_us');


Route::group(
    [
        'prefix' => 'policy',
        'as' => 'policy.'
    ],
    function (){
        Route::get('/terms_of_service', [PolicyController::class, 'terms_of_service'])->name('terms_of_service');
        Route::get('/privacy_policy', [PolicyController::class, 'terms_of_service'])->name('privacy_policy');
        Route::get('/return_policy', [PolicyController::class, 'return_policy'])->name('return_policy');
        Route::get('/cancellation_policy', [PolicyController::class, 'cancellation_policy'])->name('cancellation_policy');
        Route::get('/refund_policy', [PolicyController::class, 'refund_policy'])->name('refund_policy');

    }
);
//Route::get('/files', App\Livewire\FileManager::class)->name('files.index');
//Route::get('/files/{file}', App\Livewire\FileManager::class)->name('files.show');

