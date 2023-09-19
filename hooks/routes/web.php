<?php

use App\Livewire\CreateSayac;
use Illuminate\Support\Facades\Route;
use App\Livewire\CreateUser;
use App\Livewire\SimpleComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/mesaj', SimpleComponent::class);
Route::get('/sayac', CreateSayac::class);