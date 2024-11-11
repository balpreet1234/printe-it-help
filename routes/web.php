<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


Route::get('/contact', function () {
    return view('welcome');
});
Route::get('/contact', [ContactController::class, 'contactpage'])->name('contact');
Route::post('/submit-contact-form', [ContactController::class, 'submitContactForm'])->name('contact.submit');
Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::get('/about', [HomeController::class, 'aboutpage'])->name('about.show');
Route::get('/service', [HomeController::class, 'servicepage'])->name('service');

