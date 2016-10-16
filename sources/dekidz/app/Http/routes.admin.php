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

    Route::resource('physical_infos', 'PhysicalInfosController', [
        'names' => [
            'index' => 'admin.physical_infos.index',
            'create' => 'admin.physical_infos.create',
            'store' => 'admin.physical_infos.store',
            'show' => 'admin.physical_infos.show',
            'update' => 'admin.physical_infos.update',
            'edit' => 'admin.physical_infos.edit',
            'destroy' => 'admin.physical_infos.destroy',
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

    Route::resource('staffs', 'StaffsController', [
        'names' => [
            'index' => 'admin.staffs.index',
            'create' => 'admin.staffs.create',
            'store' => 'admin.staffs.store',
            'show' => 'admin.staffs.show',
            'update' => 'admin.staffs.update',
            'edit' => 'admin.staffs.edit',
            'destroy' => 'admin.staffs.destroy',
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

    Route::resource('assets', 'AssetsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.assets.index',
            'create' => 'admin.assets.create',
            'store' => 'admin.assets.store',
            'show' => 'admin.assets.show',
            'update' => 'admin.assets.update',
            'edit' => 'admin.assets.edit',
            'destroy' => 'admin.assets.destroy',
        ],
    ]);

    Route::resource('suppliers', 'SuppliersController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.suppliers.index',
            'create' => 'admin.suppliers.create',
            'store' => 'admin.suppliers.store',
            'show' => 'admin.suppliers.show',
            'update' => 'admin.suppliers.update',
            'edit' => 'admin.suppliers.edit',
            'destroy' => 'admin.suppliers.destroy',
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

