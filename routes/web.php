<?php

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

Route::group(['namespace' => 'App\Http\Livewire'], function() {
    Route::get('/', Landing\LandingComponent::class)->name('landing');

    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::group(['namespace' => 'Administrator'], function() {
            Route::get('dashboard', Dashboard\DashboardComponent::class)->name('dashboard');
        });
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
