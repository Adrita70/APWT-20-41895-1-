<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

Route::get('/',[NameController::class,'home'])->name('home');
Route::get('/service/add',[NameController::class,'make'])->name('make');
Route::post('/service/add',[NameController::class,'submit'])->name('submit');

