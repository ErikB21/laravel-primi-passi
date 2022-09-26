<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//rotta per home
Route::get('/home', function () {
    $welcome = 'Benvenuti! Sono Erik, Web Developer!';
    $title = 'Salve, sono Erik, nuovo futuro Web Developer, con alle spalle 0 esperienza ma davanti 1000 motivazioni per creare il mio futuro.' ;
                    
    return view('home', ['welcome' => $welcome, 'title' => $title]);
})->name('HomePage');

///rotta per programming language
Route::get('/programmingLanguage', function(){
    $programmingLanguage = [
        [
            'title' =>  'HTML',
            'path' => 'https://www.offidocs.com/imageswebp/logohtmlhtml5.jpg.webp'
        ],
        [
            'title' =>  'CSS',
            'path' => 'https://t3.ftcdn.net/jpg/04/40/47/34/360_F_440473457_oZ4blIQBcwM718DNiPmx26nEeUIEHB5v.jpg'
        ],
        [
            'title' =>  'JavaScript',
            'path' => 'https://www.html.it/app/uploads/2016/02/javascript-1.png'
        ],
        [
            'title' =>  'Vue',
            'path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW1AvoJXu1NMIvNfwIWMLEX0xp7ZyQ11RjoQ&usqp=CAU'
        ],
        [
            'title' =>  'Node.js',
            'path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfZxVauwvK9ORMtJaQf1oRvmaZhAHhx3feXyaleyiYd3Q3BnFrtqAvkN9K2F069mfwEFQ&usqp=CAU'
        ],
        [
            'title' =>  'PHP',
            'path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdHesEj_JIRO4ORIHe3hIrL2b8GuItV_kKrg&usqp=CAU'
        ],
        [
            'title' =>  'Laravel',
            'path' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png'
        ]
    ];
    return view('programmingLanguage',['programmingLanguage' => $programmingLanguage]);
})->name('programmingLanguage');

//rotta per about
Route::get('/aboutMe', function(){
    $email = 'erikborgo.20@gmail.com';
    $sites = [
        [
            'url'=>'https://github.com/ErikB21',
            'title'=> 'github'
        ],
        [
            'url' => 'https://www.freecodecamp.org/ErikBorgogno21011997',
            'title' => 'free-code-camp'
        ]
    ];
    return view('aboutMe', ['email' => $email, 'sites' => $sites]);
})->name('aboutMe');