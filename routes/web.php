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

    Mail::send('email-template', [
        'sender' => request('name'),
        'email' => request('email'),
        'msg' => request('message'),
        'receiver' => env('MAIL_TO_NAME')
    ],
        function ($message) {
            $message->from(request('email'));
            $message->to(env('MAIL_TO_ADDRESS'), env('MAIL_TO_NAME'))
                ->subject('Your Website Contact Form');
        });

    return redirect('/');
});
