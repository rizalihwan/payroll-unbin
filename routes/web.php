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
    Route::get('/department', \App\Livewire\Department\Index::class)->name('department.index');
    Route::get('/department/create', \App\Livewire\Department\create::class)->name('department.create');
    Route::get('/department/edit/{id}', \App\Livewire\Department\edit::class)->name('department.edit');

    // salary slip
    Route::get('/salary-slip', \App\Livewire\SalarySlip\Index::class)->name('salary-slip.index');
    Route::get('/salary-slip/create', \App\Livewire\SalarySlip\create::class)->name('salary-slip.create');
    Route::get('/salary-slip/edit/{id}', \App\Livewire\SalarySlip\edit::class)->name('salary-slip.edit');
});

require __DIR__ . '/auth.php';
