<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


Route::get('/contact', function () {
    return view('welcome');
});
Route::get('/contact', [ContactController::class, 'contactpage'])->name('contact');
Route::post('/submit-contact-form', [ContactController::class, 'submitContactForm'])->name('contact.submit');
Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::get('/about', [HomeController::class, 'aboutpage'])->name('about.show');
Route::get('/service', [HomeController::class, 'servicepage'])->name('service');
Route::get('/dashboard', [HomeController::class, 'admindashboard'])->name('admindashboard');
Route::get('/contactadmin', [HomeController::class, 'contactindex'])->name('contactadmin');
Route::delete('/contacts/{id}', [HomeController::class, 'destroy'])->name('contacts.destroy');
Route::get('/homeadmin', [HomeController::class, 'homeindex'])->name('homeadmin');
Route::get('/settings', [HomeController::class, 'settingpage'])->name('settings');
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

