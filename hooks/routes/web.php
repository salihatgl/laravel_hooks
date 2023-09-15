<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateUser;

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

Route::get('/simple-component', function () {
   return view('livewire.simple-component', ['message' => 'Merhaba, bu bir basit Livewire bileşeni örneğidir.']);
 });
 Route::get('/example', function () {
  return view('create-user');
});
Route::get('/sayac', CreateUser::class)->name('sayac');