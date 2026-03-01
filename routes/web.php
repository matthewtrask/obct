<?php

use App\Livewire\About;
use App\Livewire\Classes;
use App\Livewire\Contact;
use App\Livewire\Galleries;
use App\Livewire\Shows;
use App\Livewire\Teachers;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/classes', Classes::class);
Route::get('/contact', Contact::class);
Route::get('/galleries', Galleries::class);
Route::get('/shows', Shows::class);
Route::get('/teachers', Teachers::class);
