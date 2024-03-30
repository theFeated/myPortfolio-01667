<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProfileController;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

    Route::get('/layouts', [HomeController::class, 'index'])->name('index');

    Route::get('/projects', [ProjectController::class, 'projects'])->name('projects');

    Route::get('/',[ContactController::class,'contact'])->name('contact');

    Route::get('/skills', [SkillController::class, 'skills'])->name('skills');

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');





