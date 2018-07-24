<?php

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('contact/submit', 'MessagesController@submit');

Route::get('messages', 'MessagesController@getMessages');
