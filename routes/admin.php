<?php
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view ('admin.dashboard');
}) ->name('dashboard');

// Gestión de roles 
Route::resource('roles', RoleController::class);
// Gestión de usuarios
Route::resource('users', UserController::class);
// Gestión de pacientes
Route::resource('patients', PatientController::class);


