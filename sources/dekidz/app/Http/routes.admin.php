<?php

Route::group(['middleware' => config('admin.filter.auth')], function () {
    Route::resource('students', 'StudentsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.students.index',
            'create' => 'admin.students.create',
            'store' => 'admin.students.store',
            'show' => 'admin.students.show',
            'update' => 'admin.students.update',
            'edit' => 'admin.students.edit',
            'destroy' => 'admin.students.destroy',
        ],
    ]);

    Route::resource('classes', 'ClassesController', [
        'except' => 'show',
        'names' => [
            'index'     => 'admin.classes.index',
            'create'    => 'admin.classes.create',
            'store'     => 'admin.classes.store',
            'show'      => 'admin.classes.show',
            'update'    => 'admin.classes.update',
            'edit'      => 'admin.classes.edit',
            'destroy'   => 'admin.classes.destroy',
        ],
    ]);

    Route::get('rem_in', ['as' => 'admin.finances.rem_in', 'uses' => function() {
        return "rem in page";
    }]);
    Route::get('rem_out', ['as' => 'admin.finances.rem_out', 'uses' => function() {
        return "rem out page";
    }]);
    Route::get('export', ['as' => 'admin.finances.export', 'uses' => function() {
        return "export page";
    }]);

    Route::resource('dishes', 'DishesController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.dishes.index',
            'create' => 'admin.dishes.create',
            'store' => 'admin.dishes.store',
            'show' => 'admin.dishes.show',
            'update' => 'admin.dishes.update',
            'edit' => 'admin.dishes.edit',
            'destroy' => 'admin.dishes.destroy',
        ],
    ]);
    Route::resource('foods', 'FoodsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.foods.index',
            'create' => 'admin.foods.create',
            'store' => 'admin.foods.store',
            'show' => 'admin.foods.show',
            'update' => 'admin.foods.update',
            'edit' => 'admin.foods.edit',
            'destroy' => 'admin.foods.destroy',
        ],
    ]);
    Route::resource('foodsets', 'FoodSetsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.foodsets.index',
            'create' => 'admin.foodsets.create',
            'store' => 'admin.foodsets.store',
            'show' => 'admin.foodsets.show',
            'update' => 'admin.foodsets.update',
            'edit' => 'admin.foodsets.edit',
            'destroy' => 'admin.foodsets.destroy',
        ],
    ]);

    Route::resource('teachers', 'TeachersController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.teachers.index',
            'create' => 'admin.teachers.create',
            'store' => 'admin.teachers.store',
            'show' => 'admin.teachers.show',
            'update' => 'admin.teachers.update',
            'edit' => 'admin.teachers.edit',
            'destroy' => 'admin.teachers.destroy',
        ],
    ]);

    Route::resource('imports', 'ImportsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.imports.index',
            'create' => 'admin.imports.create',
            'store' => 'admin.imports.store',
            'show' => 'admin.imports.show',
            'update' => 'admin.imports.update',
            'edit' => 'admin.imports.edit',
            'destroy' => 'admin.imports.destroy',
        ],
    ]);

    Route::resource('exports', 'ExportsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.exports.index',
            'create' => 'admin.exports.create',
            'store' => 'admin.exports.store',
            'show' => 'admin.exports.show',
            'update' => 'admin.exports.update',
            'edit' => 'admin.exports.edit',
            'destroy' => 'admin.exports.destroy',
        ],
    ]);

    Route::resource('rem_ins', 'RemInsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.rem_ins.index',
            'create' => 'admin.rem_ins.create',
            'store' => 'admin.rem_ins.store',
            'show' => 'admin.rem_ins.show',
            'update' => 'admin.rem_ins.update',
            'edit' => 'admin.rem_ins.edit',
            'destroy' => 'admin.rem_ins.destroy',
        ],
    ]);

    Route::resource('rem_outs', 'RemOutsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.rem_outs.index',
            'create' => 'admin.rem_outs.create',
            'store' => 'admin.rem_outs.store',
            'show' => 'admin.rem_outs.show',
            'update' => 'admin.rem_outs.update',
            'edit' => 'admin.rem_outs.edit',
            'destroy' => 'admin.rem_outs.destroy',
        ],
    ]);

    Route::get('time_table', ['as' => 'admin.education.time_table', 'uses' => function() {
        return "time table page";
    }]);
});

Route::get('oauth/google', 'OAuthController@redirectToGoogleProvider')->name('login.google');
Route::get('oauth/google/callback', 'OAuthController@handleGoogleProviderCallback');
Route::get('oauth/facebook', 'OAuthController@redirectToFacebookProvider')->name('login.facebook');
Route::get('oauth/facebook/callback', 'OAuthController@handleFacebookProviderCallback');
Route::get('oauth/twitter', 'OAuthController@redirectToTwitterProvider')->name('login.twitter');
Route::get('oauth/twitter/callback', 'OAuthController@handleTwitterProviderCallback');

