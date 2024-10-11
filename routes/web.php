<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/gyms/index', function () {
    return view('gyms.index', [
    'kelas' => [
        [
        'no' => 1,
        'gambar' => asset('img/gambar1.png'),
        "nama" => "Body Combat",
        'instruktur' => 'Charli',
        'ruang' => 'Kelas A',
        'rating' => '4'
        ],
        [
        'no' => 2,
        'gambar' => asset('img/gambar2.jpg'),
        'nama' => 'Bungee',
        'instruktur' => 'Ayas',
        'ruang' => 'Kelas B',
        'rating' => '3',
        ],
        [
        'no' => 3,
        'gambar' => asset('img/gambar3.jpg'),
        'nama' => 'Yoga',
        'instruktur' => 'Bobob',
        'ruang' => 'Kelas C',
        'rating' => '4',
        ],
        [
        'no' => 4,
        'gambar' => asset('img/gambar4.jpeg'),
        'nama' => 'Boxing',
        'instruktur' => 'Tio',
        'ruang' => 'Kelas D',
        'rating' => '5',
        ]
    ]
        ]);
});

Route::get('/gyms/presensi', function () {
    return view('gyms.presensi', [
        'members' => [
            [
            'nama' => 'Haechan',
            'email' => 'fullsun@gmail.com',
            'noTelp' => '08123456789',
            'jenisKartu' => 'gold',
            'metode' => 'hutangTeman',
            ],
            [
            'nama' => 'Jungwoo',
            'email' => 'obok@gmail.com',
            'noTelp' => '08123456789',
            'jenisKartu' => 'silver',
            'metode' => 'langsungBayar',
            ],
            [
            'nama' => 'Taeyong',
            'email' => 'bubu@gmail.com',
            'noTelp' => '08123456789',
            'jenisKartu' => 'gold',
            'metode' => 'hutangTeman',
            ],
            [
            'nama' => 'Mark',
            'email' => 'melk@gmail.com',
            'noTelp' => '08123456789',
            'jenisKartu' => 'silver',
            'metode' => 'langsungBayar',
            ],
            [
            'nama' => 'Johnny',
            'email' => 'chicago@gmail.com',
            'noTelp' => '08123456789',
            'jenisKartu' => 'gold',
            'metode' => 'hutangTeman',
            ],
            [
            'nama' => 'Chenle',
            'email' => 'daegal@gmail.com',
            'noTelp' => '08123456789',
            'jenisKartu' => 'silver',
            'metode' => 'langsungBayar',
            ],

        ]
    ]);
});