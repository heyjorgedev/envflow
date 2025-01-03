<?php

use App\Http\Controllers\EnvController;
use App\Livewire\EncryptEnvPage;
use Illuminate\Support\Facades\Route;

Route::get('/', EncryptEnvPage::class);

Route::resource('envs', EnvController::class)
    ->only('store', 'show');
