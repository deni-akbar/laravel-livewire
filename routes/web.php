<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CarPriceList;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cek-komponen', function () {
    return class_exists(CarPriceList::class) ? 'OK Komponen Ditemukan' : 'Komponen Tidak Ditemukan';
});
