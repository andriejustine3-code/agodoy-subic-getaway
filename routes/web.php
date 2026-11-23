<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('pages.about-us');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

Route::get('/attractions', function () {
    return view('pages.attr');
});

Route::get('/hotels-and-restaurants', function () {
    return view('pages.hotels-res');
});

Route::get('/news-and-events', function () {
    return view('pages.news-events');
});

Route::get('/hotel-page', function () {
    return view('pages.hotel-page');
});