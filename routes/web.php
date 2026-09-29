<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');