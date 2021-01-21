<?php

use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\PositionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('issue', IssueController::class)->middleware(['auth']);
Route::resource('developer', DeveloperController::class)->middleware(['auth']);
Route::resource('role', DeveloperController::class)->middleware(['auth']);
Route::resource('category', IssueController::class)->middleware(['auth']);
Route::resource('project', IssueController::class)->middleware(['auth']);
