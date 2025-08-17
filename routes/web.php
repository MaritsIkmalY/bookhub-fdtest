<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Auth\VerifyEmail;
use App\Livewire\UserList;
use App\Livewire\BookManagement;
use App\Livewire\LandingPage;
use App\Livewire\Home;
use App\Livewire\ProfilePage;


Route::get('/', LandingPage::class)->name('landing-page');

Route::middleware(['guest'])->group(function () {
    // Authentication Routes
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');

    // Password Reset Routes
    Route::get('/forgot-password', ForgotPassword::class)->name('password.request');
    Route::get('/reset-password/{token}', ResetPassword::class)->name('password.reset');
});



Route::get('/email/verify/{id}/{hash}', VerifyEmail::class)
    ->middleware(['signed'])
    ->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->name('verification.notice');

Route::post('/email/verification-notification', function () {
    auth()->user()->sendEmailVerificationNotification();
    return back()->with('success', 'Verification link sent!');
})->middleware(['throttle:6,1'])->name('verification.send');



Route::middleware(['auth', 'verified'])->group(function () {
   // TES: pastikan route /profile benar2 kena
    Route::get('/profile', ProfilePage::class)->name('profile');

    Route::get('/home', Home::class)->name('home');
    Route::get('/dashboard', function () {
        return redirect()->route('home');
    });

    // User Management
    Route::get('/users', UserList::class)->name('users');

    // Book Management
    Route::get('/books', BookManagement::class)->name('books');
    Route::get('/books/create', BookManagement::class)->name('books.create');
    Route::get('/books/{book}/edit', BookManagement::class)->name('books.edit');


    // Logout Route
    Route::post('/logout', function () {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    })->name('logout');
});


Route::fallback(function () {
    return view('errors.404');
});