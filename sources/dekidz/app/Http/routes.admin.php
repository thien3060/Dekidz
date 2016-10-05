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
    Route::get('import', ['as' => 'admin.finances.import', 'uses' => function() {
        return "import page";
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
    Route::resource('food_sets', 'FoodSetsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.food_sets.index',
            'create' => 'admin.food_sets.create',
            'store' => 'admin.food_sets.store',
            'show' => 'admin.food_sets.show',
            'update' => 'admin.food_sets.update',
            'edit' => 'admin.food_sets.edit',
            'destroy' => 'admin.food_sets.destroy',
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
    Route::get('time_table', ['as' => 'admin.education.time_table', 'uses' => function() {
        return "time table page";
    }]);
});
