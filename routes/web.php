<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('tugas');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/beranda', function () {
    return view('page.beranda');
});


Route::get('/profile', function () {
    return view('page.profile');
});


Route::get('/about', function () {
    return view('page.about');
});



Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
    ->name('mahasiswa.index');

Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'create'])
    ->name('mahasiswa.create');

Route::post('/mahasiswa', [MahasiswaController::class, 'store'])
    ->name('mahasiswa.store');

Route::delete('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'deleteData'])
    ->name('mahasiswa.hapus');

Route::get('/mahasiswa/update/{nim}', [MahasiswaController::class, 'editData'])
    ->name('mahasiswa.edit');

Route::put('/mahasiswa/update/{nim}', [MahasiswaController::class, 'updateData'])
    ->name('mahasiswa.update');
