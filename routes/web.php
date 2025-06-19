<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/formulir', function () {return view('formulir.index');})->name('formulir');
Route::post('/formulir/confirmation', [FormulirController::class, 'confirmation'])->name('formulir.confirmation');
Route::get('/formulir/ticket/{id}', [FormulirController::class, 'showTicket'])->name('formulir.ticket');
Route::post('/formulir/submit-confirmation', [FormulirController::class, 'submitConfirmation'])->name('formulir.submitConfirmation');