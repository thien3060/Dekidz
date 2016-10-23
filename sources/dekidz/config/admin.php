<?php

return [
    'prefix' => 'admin',
    'filter' => [
        'auth' => [
            Pingpong\Admin\Middleware\Authenticate::class,
            Pingpong\Admin\Middleware\OnlyAdmin::class
        ],
        'guest' => Pingpong\Admin\Middleware\RedirectIfAuthenticated::class,
    ],
    'views' => [
        'layout' => 'admin::layouts.master',
        'post' => 'admin::article'
    ],
    'article' => [
        'model' => 'Pingpong\Admin\Entities\Article',
        'perpage' => 10
    ],
    'student' => [
        'model' => 'App\Models\Student',
        'perpage' => 10
    ],
    'grade' => [
        'model' => 'App\Models\Grade',
        'perpage' => 10
    ],
    'physical_info' => [
        'model' => 'App\Models\PhysicalInfo',
        'perpage' => 10
    ],
    'staff' => [
        'model' => 'App\Models\Staff',
        'perpage' => 10
    ],
    'salary' => [
        'model' => 'App\Models\Salary',
        'perpage' => 10
    ],
    'department' => [
        'model' => 'App\Models\Department',
        'perpage' => 10
    ],
    'rem_in' => [
        'model' => 'App\Models\RemIn',
        'perpage' => 10
    ],
    'rem_out' => [
        'model' => 'App\Models\RemOut',
        'perpage' => 10
    ],
    'asset' => [
        'model' => 'App\Models\Asset',
        'perpage' => 10
    ],
    'supplier' => [
        'model' => 'App\Models\Supplier',
        'perpage' => 10
    ],
    'class' => [
        'model' => 'App\Models\DekidzClass',
        'perpage' => 10
    ],
    'subject_topic' => [
        'model' => 'App\Models\SubjectTopic',
        'perpage' => 10
    ],
    'dish' => [
        'model' => 'App\Models\Dish',
        'perpage' => 10
    ],
    'food' => [
        'model' => 'App\Models\Food',
        'perpage' => 10
    ],
    'foodset' => [
        'model' => 'App\Models\FoodSet',
        'perpage' => 10
    ],
    'import' => [
        'model' => 'App\Models\Import',
        'perpage' => 10
    ],
    'export' => [
        'model' => 'App\Models\Export',
        'perpage' => 10
    ],
    'foodgroup' => [
        'model' => 'App\Models\FoodGroup',
        'perpage' => 10
    ],
    'foodsettype' => [
        'model' => 'App\Models\FoodSetType',
        'perpage' => 10
    ],
    'dishtype' => [
        'model' => 'App\Models\DishType',
        'perpage' => 10
    ],
    'teach_schedule' => [
        'model' => 'App\Models\TeachSchedule',
        'perpage' => 10
    ],
    'energy_need' => [
        'model' => 'App\Models\EnergyNeed',
        'perpage' => 10
    ],
    'page' => [
        'perpage' => 10
    ],
    'user' => [
        'model' => 'Pingpong\Admin\Entities\User',
        'perpage' => 10
    ],
    'role' => [
        'model' => 'Pingpong\Admin\Entities\Role',
        'perpage' => 10
    ],
    'permission' => [
        'model' => 'Pingpong\Admin\Entities\Permission',
        'perpage' => 10
    ],
    'category' => [
        'model' => 'Pingpong\Admin\Entities\Category',
        'perpage' => 10
    ],

];
