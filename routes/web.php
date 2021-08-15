<?php

use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/writing', function () {
    return view('writing');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {

    Mail::send('contact', [
        'name' => request('name'),
        'email' => request('email'),
        'message' => request('message')
    ],
        function ($message) {
            $message->from('youremail@your_domain');
            $message->to('youremail@your_domain', 'Your Name')
                ->subject('Your Website Contact Form');
        });

    return redirect('/');
});
