<?php

use App\Models\Article;
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

/* Welcome Page */

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Auth Routes */
Auth::routes();

/* Central Route */
Route::get('/central', [App\Http\Controllers\CentralController::class, 'index'])->name('central');

/* User */
Route::prefix('/users')->group(function () {

    /* Account */
    Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])
        ->name('user.account');

    Route::get('/{user}', [App\Http\Controllers\AccountController::class, 'show'])
        ->name('user.show');

    Route::PUT('/{id}', [App\Http\Controllers\AccountController::class, 'update'])
        ->name('account.update');

    /* Rivals */
    Route::prefix('/rivals')->group(function () {

        Route::post('/invite', [App\Http\Controllers\RivalController::class, 'invite'])
            ->name('rival.invite');

        Route::post('/store/{id}', [App\Http\Controllers\RivalController::class, 'respond'])
            ->name('rival.respond');
    });
});

Route::prefix('/teams')->group(function () {

    Route::get('/', [App\Http\Controllers\TeamController::class, 'index'])
        ->name('team');

    Route::get('/{team}', [App\Http\Controllers\TeamController::class, 'show'])
        ->name('teams.show');

    Route::post('/application/{id}', [App\Http\Controllers\TeamController::class, 'apply'])
        ->name('team.application');
});

Route::prefix('/transfers')->group(function () {

    Route::get('/', [App\Http\Controllers\TransferController::class, 'index'])
        ->name('transfers');
});

Route::prefix('/office')->group(function () {

    Route::get('/', [App\Http\Controllers\OfficeController::class, 'index'])
        ->name('office');
});

Route::prefix('/seasons')->group(function () {

    Route::get('/', [App\Http\Controllers\SeasonController::class, 'index'])
        ->name('season');
});

Route::prefix('/players')->group(function () {

    Route::get('/{player}', [App\Http\Controllers\PlayerController::class, 'show'])
        ->name('players.show');
});

/* Articles */
Route::prefix('/articles')->group(function () {

    Route::get('/create', [App\Http\Controllers\ArticleController::class, 'create'])
        ->name('article.create')->middleware('administrator');

    Route::get('/{article}', [App\Http\Controllers\ArticleController::class, 'show'])
        ->name('article.show');

    Route::PUT('/{article}', [App\Http\Controllers\ArticleController::class, 'edit'])
        ->name('article.edit')->middleware('administrator');

    Route::POST('/store', [App\Http\Controllers\ArticleController::class, 'store'])
        ->name('article.store')->middleware('administrator');

    Route::DELETE('/{article}', [App\Http\Controllers\ArticleController::class, 'delete'])
        ->name('article.delete')->middleware('administrator');
});

/* Leagues */
Route::prefix('/leagues')->group(function () {

    Route::get('/{league}', [App\Http\Controllers\LeagueController::class, 'show'])
        ->name('league.show');
});

/* Competition & Fixtures */
Route::prefix('/competitions')->group(function () {

    Route::get('/', [App\Http\Controllers\CompetitionController::class, 'index'])
        ->name('competition.index');

    Route::get('/create', [App\Http\Controllers\CompetitionController::class, 'create'])
        ->name('competition.create')->middleware('administrator');

    Route::get('/{competition}', [App\Http\Controllers\CompetitionController::class, 'show'])
        ->name('competition.show');

    Route::post('/store', [App\Http\Controllers\CompetitionController::class, 'store'])
        ->name('competition.store');

    Route::prefix('/fixtures')->group(function () {

        Route::get('/create/{competition}', [App\Http\Controllers\FixtureController::class, 'create'])
            ->name('fixture.create');

        Route::post('/store/{competition}', [App\Http\Controllers\FixtureController::class, 'store'])
            ->name('fixture.store');
    });
});

/* Tutorials */
Route::prefix('/tutorial')->group(function () {

    Route::post('/invite', [App\Http\Controllers\TutorialController::class, 'invite'])
        ->name('tutorial.invite');

    Route::post('/respond/{id}', [App\Http\Controllers\TutorialController::class, 'respond'])
        ->name('tutorial.respond');

    Route::post('/store/{id}', [App\Http\Controllers\TutorialController::class, 'store'])
        ->name('tutorial.store');

    Route::delete('/delete/{id}', [App\Http\Controllers\TutorialController::class, 'delete'])
        ->name('tutorial.delete');
});

/* Admin Routes */
Route::prefix('/admin')->group(function () {

    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])
        ->name('admin.index')->middleware('administrator');

    Route::get('/tutorials', [App\Http\Controllers\AdminController::class, 'tutorials'])
        ->name('admin.tutorials')->middleware('administrator');

    Route::post('/tutorials/respond/{id}', [App\Http\Controllers\AdminController::class, 'tutorialRespond'])
        ->name('admin.tutorial.respond')->middleware('administrator');

    Route::get('/jobApplications', [App\Http\Controllers\AdminController::class, 'jobApplications'])
        ->name('admin.jobApplications')->middleware('administrator');

    Route::post('/jobApplications/respond/{id}', [App\Http\Controllers\AdminController::class, 'JobApplicationRespond'])
        ->name('admin.jobApplication.respond')->middleware('administrator');
});
