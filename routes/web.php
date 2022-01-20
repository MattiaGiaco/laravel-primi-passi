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

Route::get('/', function () {

    $data = [
        'name' => 'Mattia'
    ];

    return view('home', $data);
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/FAQ', function () {

    $data = [
        'faqs' => [
            "Does Shift upgrade everything?",
            "Does Shift do more than the Laravel Upgrade Guide?",
            "Can I upgrade multiple versions at once?",
            "What if my project is not on Bitbucket/GitHub/GitLab?",
            "What if my boss/client/legal/paranoia won't let me share my project?"
        ]
    ];

    return view('faq', $data);
})->name('faq');
