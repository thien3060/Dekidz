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
    'staff' => [
        'model' => 'App\Models\Staff',
        'perpage' => 10
    ],
    'class' => [
        'model' => 'App\Models\DekidzClass',
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
