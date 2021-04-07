<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/account')->group(function () {

    Route::get('/', [App\Http\Controllers\AccountController::class, 'index'])
        ->name('user.account');

    Route::get('/{user}', [App\Http\Controllers\AccountController::class, 'show'])
        ->name('user.show');

    Route::PUT('/{id}', [App\Http\Controllers\AccountController::class, 'update'])
        ->name('account.update');
});

Route::prefix('/office')->group(function () {

    Route::get('/', [App\Http\Controllers\OfficeController::class, 'index'])
        ->name('office');
});

Route::prefix('/teams')->group(function () {

    Route::get('/', [App\Http\Controllers\TeamController::class, 'index'])
        ->name('team');

    Route::get('/{team}', [App\Http\Controllers\TeamController::class, 'show'])
        ->name('teams.show');
});

Route::prefix('/players')->group(function () {

    Route::get('/{player}', [App\Http\Controllers\PlayerController::class, 'show'])
        ->name('players.show');
});
