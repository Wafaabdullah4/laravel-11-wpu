<?php

use Illuminate\Support\Facades\Route;

//mendapatkan tanggal
use Carbon\Carbon;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about', ['nama' => 'Wafa Abdullah Nurbani Adam']);
});


// tugas 1: ( materi ke 3.Struktur Folder)
// Buat 2 rute baru
// 1. /blog
// membuat 2 buah artikel, judul dan isi
// 2. /contact
// email / social media

// pengerjaan tugas 1

// untuk blog
Route::get('/blog', function(){
    return view('blog', [
        'penulis' => 'Wafa Abullah Nurbani Adam',
        'tanggal' => Carbon::now()->toDateString()
    ]);
});

// untuk contact
Route::get('/contact', function(){
    return view('contact', [
        'nama' => 'Wafa Abdullah Nurbani Adam'
    ]);
});