<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationCodeController;
use App\Http\Controllers\Auth\RegisterController;




// Página principal muestra el registro
Route::get('/', function () {
    return view('REGRISTRO'); // Asumiendo que tienes esta vista en resources/views
});

// Registro de usuario
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/login', function () {
    return view('LOGIN'); // Asegurate de que el archivo se llame LOGIN.blade.php y esté en la carpeta resources/views
})->name('login');

Route::post('login', [LoginController::class, 'login']);


Route::get('/verificacion-de-codigo', [VerificationCodeController::class, 'show'])->name('verificacion.codigo');
Route::post('/verificar-codigo', [VerificationCodeController::class, 'verificar'])->name('verificar.codigo');

Route::get('/bienvenida', function () {
    return view('Bienvenida');
})->name('bienvenida');

