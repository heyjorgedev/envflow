<?php

use App\Livewire\EncryptEnvPage;
use Illuminate\Support\Facades\Route;

Route::get('/', EncryptEnvPage::class);
Route::get('/success/{id}', EncryptEnvPage::class);
