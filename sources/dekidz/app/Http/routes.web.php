<?php

Route::get('/', function () {
    return view('frontend.pages.index');
});

Route::get('/blogone', function () {
    return view('frontend.pages.blogone');
});

Route::get('/aboutus', function () {
    return view('frontend.pages.about');
});

Route::get('/aboutus2', function () {
    return view('frontend.pages.aboutus2');
});

Route::get('/service', function () {
    return view('frontend.pages.service');
});

Route::get('/blog', function () {
    return view('frontend.pages.blog');
});

Route::get('/pricing', function () {
    return view('frontend.pages.pricing');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});


Route::get('/coming-soon', function () {
    return view('frontend.pages.coming-soon');
});

Route::get('/404', function () {
    return view('frontend.pages.404');
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');