<?php

Route::get('/', function () {
    return view('frontend.pages.index');
});

Route::get('/blogone', 'ArticlesController@blogone');
Route::get('/blog', 'ArticlesController@index');
Route::get('/article/{id}', 'ArticlesController@show')->name('frontend.articles.show');

Route::get('/aboutus', function () {
    return view('frontend.pages.about');
});

Route::get('/aboutus2', function () {
    return view('frontend.pages.aboutus2');
});

Route::get('/service', function () {
    return view('frontend.pages.service');
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