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

    Route::resource('grades', 'GradesController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.grades.index',
            'create' => 'admin.grades.create',
            'store' => 'admin.grades.store',
            'show' => 'admin.grades.show',
            'update' => 'admin.grades.update',
            'edit' => 'admin.grades.edit',
            'destroy' => 'admin.grades.destroy',
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

    Route::resource('staff_types', 'StaffTypesController', [
        'names' => [
            'index' => 'admin.staff_types.index',
            'create' => 'admin.staff_types.create',
            'store' => 'admin.staff_types.store',
            'show' => 'admin.staff_types.show',
            'update' => 'admin.staff_types.update',
            'edit' => 'admin.staff_types.edit',
            'destroy' => 'admin.staff_types.destroy',
        ],
    ]);

    Route::resource('salaries', 'SalariesController', [
        'except' => ['show', 'create'],
        'names' => [
            'index' => 'admin.salaries.index',
            'store' => 'admin.salaries.store',
            'update' => 'admin.salaries.update',
            'edit' => 'admin.salaries.edit',
            'destroy' => 'admin.salaries.destroy',
        ],
    ]);

    Route::resource('departments', 'DepartmentsController', [
        'names' => [
            'index' => 'admin.departments.index',
            'create' => 'admin.departments.create',
            'store' => 'admin.departments.store',
            'show' => 'admin.departments.show',
            'update' => 'admin.departments.update',
            'edit' => 'admin.departments.edit',
            'destroy' => 'admin.departments.destroy',
        ],
    ]);

    Route::resource('import_food', 'ImportFoodController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.import_food.index',
            'create' => 'admin.import_food.create',
            'store' => 'admin.import_food.store',
            'show' => 'admin.import_food.show',
            'update' => 'admin.import_food.update',
            'edit' => 'admin.import_food.edit',
            'destroy' => 'admin.import_food.destroy',
        ],
    ]);

    Route::resource('tuition_fees', 'TuitionFeeController', [
        'names' => [
            'index' => 'admin.tuition_fees.index',
            'create' => 'admin.tuition_fees.create',
            'store' => 'admin.tuition_fees.store',
            'show' => 'admin.tuition_fees.show',
            'update' => 'admin.tuition_fees.update',
            'edit' => 'admin.tuition_fees.edit',
            'destroy' => 'admin.tuition_fees.destroy',
        ],
    ]);

    Route::resource('maintenance_ballots', 'MaintenanceBallotController', [
        'names' => [
            'index' => 'admin.maintenance_ballots.index',
            'create' => 'admin.maintenance_ballots.create',
            'store' => 'admin.maintenance_ballots.store',
            'show' => 'admin.maintenance_ballots.show',
            'update' => 'admin.maintenance_ballots.update',
            'edit' => 'admin.maintenance_ballots.edit',
            'destroy' => 'admin.maintenance_ballots.destroy',
        ],
    ]);


    Route::resource('import_asset', 'ImportAssetController', [
        'names' => [
            'index' => 'admin.import_asset.index',
            'create' => 'admin.import_asset.create',
            'store' => 'admin.import_asset.store',
            'show' => 'admin.import_asset.show',
            'update' => 'admin.import_asset.update',
            'edit' => 'admin.import_asset.edit',
            'destroy' => 'admin.import_asset.destroy',
        ],
    ]);

    Route::resource('export_assets', 'ExportAssetController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.export_assets.index',
            'create' => 'admin.export_assets.create',
            'store' => 'admin.export_assets.store',
            'show' => 'admin.export_assets.show',
            'update' => 'admin.export_assets.update',
            'edit' => 'admin.export_assets.edit',
            'destroy' => 'admin.export_assets.destroy',
        ],
    ]);

    Route::resource('exports', 'ExportsController', [
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

    Route::resource('lessons', 'LessonsController', [
        'names' => [
            'index' => 'admin.lessons.index',
            'create' => 'admin.lessons.create',
            'store' => 'admin.lessons.store',
            'show' => 'admin.lessons.show',
            'update' => 'admin.lessons.update',
            'edit' => 'admin.lessons.edit',
            'destroy' => 'admin.lessons.destroy',
        ],
    ]);


    Route::resource('energy_needs', 'EnergyNeedsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.energy_needs.index',
            'create' => 'admin.energy_needs.create',
            'store' => 'admin.energy_needs.store',
            'show' => 'admin.energy_needs.show',
            'update' => 'admin.energy_needs.update',
            'edit' => 'admin.energy_needs.edit',
            'destroy' => 'admin.energy_needs.destroy',
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

    Route::resource('dishtypes', 'DishTypesController', [
        'names' => [
            'index' => 'admin.dishtypes.index',
            'create' => 'admin.dishtypes.create',
            'store' => 'admin.dishtypes.store',
            'show' => 'admin.dishtypes.show',
            'update' => 'admin.dishtypes.update',
            'edit' => 'admin.dishtypes.edit',
            'destroy' => 'admin.dishtypes.destroy',
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

    Route::resource('foodsettypes', 'FoodSetTypesController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.foodsettypes.index',
            'create' => 'admin.foodsettypes.create',
            'store' => 'admin.foodsettypes.store',
            'show' => 'admin.foodsettypes.show',
            'update' => 'admin.foodsettypes.update',
            'edit' => 'admin.foodsettypes.edit',
            'destroy' => 'admin.foodsettypes.destroy',
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

    Route::resource('foodgroups', 'FoodGroupsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.foodgroups.index',
            'create' => 'admin.foodgroups.create',
            'store' => 'admin.foodgroups.store',
            'show' => 'admin.foodgroups.show',
            'update' => 'admin.foodgroups.update',
            'edit' => 'admin.foodgroups.edit',
            'destroy' => 'admin.foodgroups.destroy',
        ],
    ]);
    
    Route::get('teach_schedules', 'TeachSchedulesController@index')->name('admin.teach_schedules.index');
    Route::post('teach_schedules/detail', 'TeachSchedulesController@detail')->name('admin.teach_schedules.detail');
    Route::post('teach_schedules/update', 'TeachSchedulesController@update')->name('admin.teach_schedules.update');

    Route::resource('subject_topics', 'SubjectTopicsController', [
        'except' => 'show',
        'names' => [
            'index' => 'admin.subject_topics.index',
            'create' => 'admin.subject_topics.create',
            'store' => 'admin.subject_topics.store',
            'show' => 'admin.subject_topics.show',
            'update' => 'admin.subject_topics.update',
            'edit' => 'admin.subject_topics.edit',
            'destroy' => 'admin.subject_topics.destroy',
        ],
    ]);
});

Route::get('oauth/google', 'OAuthController@redirectToGoogleProvider')->name('login.google');
Route::get('oauth/google/callback', 'OAuthController@handleGoogleProviderCallback');
Route::get('oauth/facebook', 'OAuthController@redirectToFacebookProvider')->name('login.facebook');
Route::get('oauth/facebook/callback', 'OAuthController@handleFacebookProviderCallback');
Route::get('oauth/twitter', 'OAuthController@redirectToTwitterProvider')->name('login.twitter');
Route::get('oauth/twitter/callback', 'OAuthController@handleTwitterProviderCallback');

