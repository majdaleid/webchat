<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebchatController;

use App\Livewire\FirstStep;
use App\Livewire\SecondStep;
use App\Livewire\ThirdStep;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/first-step', FirstStep::class)->name('firststep');
    Route::get('/second-step', SecondStep::class)->name('secondstep');
    Route::get('/third-step', ThirdStep::class)->name('thirdstep');

    Route::get('/confirmation', function () {
        return view('confirmation');
    })->name('confirmation');
});
