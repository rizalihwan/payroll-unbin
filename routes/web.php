<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::group(['middleware' => ['auth']], function () {
    // department
    Route::group(['prefix' => 'department', 'as' => 'department.'], function () {
        Route::get('/', \App\Livewire\Department\Index::class)->name('index');
        Route::get('/create', \App\Livewire\Department\create::class)->name('create');
        Route::get('/edit/{id}', \App\Livewire\Department\edit::class)->name('edit');
    });

    // salary slip
    Route::group(['prefix' => 'salary-slip', 'as' => 'salary-slip.'], function () {
        Route::get('/', \App\Livewire\SalarySlip\Index::class)->name('index');
        Route::get('/create', \App\Livewire\SalarySlip\create::class)->name('create');
        Route::get('/edit/{id}', \App\Livewire\SalarySlip\edit::class)->name('edit');
    });
});

require __DIR__ . '/auth.php';
