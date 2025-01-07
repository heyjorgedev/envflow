<?php

use App\Livewire\DecryptEnvPage;
use App\Livewire\EncryptEnvPage;
use App\Livewire\SuccessPage;
use Illuminate\Support\Facades\Route;

Route::get('/', EncryptEnvPage::class)->name('home');
Route::get('/success/{id}', SuccessPage::class)->name('success');
Route::get('/decrypt/{id}', DecryptEnvPage::class)->name('decrypt');

Route::view('/about', 'about')->name('about');
