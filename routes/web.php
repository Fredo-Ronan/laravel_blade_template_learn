<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Login');
});

// Start Code UGD
Route::get('/login', function() {
    return view('Login');
});
// End Code UGD

Route::get('/dashboard', function() {
    return view('Dashboard');
});

Route::get('/gyms', function() {
    return view('Gyms/index', [
        'kelas' => [
            [
            'no' => 1,
            "gambar" => "https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png",
            "nama" => "Body Combat",
            'instruktur' => 'Jolly',
            'ruang' => 'Kelas A',
            'rating' => '5'
            ],
            [
            'no' => 2,
            'gambar' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/dc/83/bc.jpg',
            'nama' => 'Bungee ',
            'instruktur' => 'Agung',
            'ruang' => 'Kelas B',
            'rating' => '3',
            ],
            [
            'no' => 3,
            'gambar' => 'https://fitbod.me/wp-content/uploads/2021/07/yoga-and-the-gym-on-the-same-day.jpg',
            'nama' => 'Yogalates ',
            'instruktur' => 'Raka',
            'ruang' => 'Kelas C',
            'rating' => '4',
            ],
            [
            'no' => 4,
            'gambar' => 'https://res.cloudinary.com/display97/image/upload/7930/boxing2-224119.jpeg',
            'nama' => 'Boxing ',
            'instruktur' => 'Tebri',
            'ruang' => 'Kelas D',
            'rating' => '5',
            ]
        ]
    ]);
});

// Start Code UGD
Route::get('/presensi', function() {
    return view('presensi', [
        'kelas' => [
            [
                'no' => 1,
                "gambar" => "https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png",
                "nama" => "Body Combat",
                'instruktur' => 'Boniface Fredo Ronan Antolino',
                'ruang' => 'Kelas B',
                'total_member' => '6',
                'rating' => '5',
                'npm' => '210711446'
            ]
        ],
        'member' => [
            [
                'no' => 1,
                'nama' => 'Rakai Anandhi Mahardika',
                'email' => 'raka@gmail.com',
                'notelp' => '081389289382',
                'jeniskartu' => 'Gold',
                'metode' => 'Deposit Kelas'
            ],
            [
                'no' => 2,
                'nama' => 'Daniel Ricky Alexander',
                'email' => 'Ricky@gmail.com',
                'notelp' => '082178378293',
                'jeniskartu' => 'Silver',
                'metode' => 'Deposit Uang'
            ],
            [
                'no' => 3,
                'nama' => 'Agung Raynaldi Mangiri',
                'email' => 'Agung@gmail.com',
                'notelp' => '085982989383',
                'jeniskartu' => 'Black',
                'metode' => 'Deposit Kelas'
            ],
            [
                'no' => 4,
                'nama' => 'Patrick nino kolin prama',
                'email' => 'patrick@gmail.com',
                'notelp' => '0089763748573',
                'jeniskartu' => 'Black',
                'metode' => 'Deposit Uang'
            ],
            [
                'no' => 5,
                'nama' => 'Ignatius Sodhana Tebri Artanto',
                'email' => 'ignatius@gmail.com',
                'notelp' => '082474857384',
                'jeniskartu' => 'Gold',
                'metode' => 'Deposit Kelas' 
            ],
            [
                'no' => 6,
                'nama' => 'Kevin Jonathan Wijaya',
                'email' => 'KejoWidjaya@gmail.com',
                'notelp' => '082475837485',
                'jeniskartu' => 'Silver',
                'metode' => 'Deposit Uang'
            ]
        ]
    ]);
});
// End Code UGD