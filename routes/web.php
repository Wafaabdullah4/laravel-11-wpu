<?php

use Carbon\Carbon;

//mendapatkan tanggal
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function(){
    return view('about', [
        'nama' => 'Wafa Abdullah Nurbani Adam',
        'title' => 'About'
    ]);
});


// tugas 1: ( materi ke 3.Struktur Folder)
// Buat 2 rute baru
// 1. /blog
// membuat 2 buah artikel, judul dan isi
// 2. /contact
// email / social media

// pengerjaan tugas 1

// untuk blog
Route::get('/posts', function(){
    return view('posts', [
        'penulis' => 'Wafa Abullah Nurbani Adam',
        'title' => 'Blog',
        'posts' => [
         [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Wafa Abdullah Nurbani Adam',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ad error tempore sed
            quam voluptatum,
            accusamus enim, dolores, recusandae quae ratione voluptas numquam nobis delectus. Illum sint veritatis
            numquam eum.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Wafa Abdullah Nurbani Adam',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, dicta reiciendis.
            Ut velit distinctio laboriosam quia neque, id est eum alias corporis dicta, cupiditate commodi, non eligendi
            accusamus dolor eaque?'
        ]
        ],
        'tanggal' => Carbon::now()->toDateString(),
    ]);
});

// route while card


Route::get('/posts/{slug}', function($slug) {
    // Data post yang benar
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Wafa Abdullah Nurbani Adam',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ad error tempore sed quam voluptatum, accusamus enim, dolores, recusandae quae ratione voluptas numquam nobis delectus. Illum sint veritatis numquam eum.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Wafa Abdullah Nurbani Adam',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, dicta reiciendis. Ut velit distinctio laboriosam quia neque, id est eum alias corporis dicta, cupiditate commodi, non eligendi accusamus dolor eaque?'
        ]
    ];

    // Fungsi bantuan untuk array
    $post = Arr::first($posts, function($post) use($slug) {
        return $post['slug'] == $slug;
    });

    if(!$post){
        abort(404);
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
    // // Debug output
    // dd($post);
});

// untuk contact
Route::get('/contact', function(){
    return view('contact', [
        'nama' => 'Wafa Abdullah Nurbani Adam',
        'title' => 'Contact'
    ]);
});

Route::fallback(function(){
    return view('errors.404');
});