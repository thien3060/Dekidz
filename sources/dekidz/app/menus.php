<?php

$rightMenu = Menu::instance('admin-menu-right');

$leftMenu = Menu::create('admin-menu', function ($menu) {
    $menu->enableOrdering();
    $menu->setPresenter('Pingpong\Admin\Presenters\SidebarMenuPresenter');
    //Dashboard
    $menu->route('admin.home', trans('admin.menus.dashboard'), [], 0, ['icon' => 'fa fa-dashboard']);

    //Students
    $menu->dropdown(trans('admin.menus.students.title'), function ($sub) {
        $sub->route('admin.students.index', trans('admin.menus.students.all'), [], 1);
        $sub->route('admin.students.create', trans('admin.menus.students.create'), [], 2);
    }, 1, ['icon' => 'fa fa-smile-o']);

    //Classes
    $menu->dropdown(trans('admin.menus.classes.title'), function ($sub) {
        $sub->route('admin.classes.index', trans('admin.menus.classes.all'), [], 1);
        $sub->route('admin.classes.create', trans('admin.menus.classes.create'), [], 2);
    }, 2, ['icon' => 'fa fa-graduation-cap']);

    //Finances
    $menu->dropdown(trans('admin.menus.finances.title'), function ($sub) {
        $sub->route('admin.rem_ins.index', trans('admin.menus.finances.rem_in'), [], 1);
        $sub->route('admin.rem_outs.index', trans('admin.menus.finances.rem_out'), [], 2);
    }, 3, ['icon' => 'fa fa-usd']);

    //Assets
    $menu->dropdown(trans('admin.menus.repository.title'), function ($sub) {
        $sub->route('admin.assets.index', trans('admin.menus.repository.assets.all'), [], 1);
        $sub->route('admin.assets.create', trans('admin.menus.repository.assets.create'), [], 2);
        $sub->route('admin.imports.index', trans('admin.menus.repository.import'), [], 3);
        $sub->route('admin.exports.index', trans('admin.menus.repository.export'), [], 4);
    }, 4, ['icon' => 'fa fa-usd']);

    //Nutrition
    $menu->dropdown(trans('admin.menus.nutrition.title'), function ($sub) {
        $sub->route('admin.dishes.index', trans('admin.menus.nutrition.dishes'), [], 1);
        $sub->route('admin.foods.index', trans('admin.menus.nutrition.food'), [], 2);
        $sub->route('admin.foodsets.index', trans('admin.menus.nutrition.food_set'), [], 3);
    }, 5, ['icon' => 'fa fa-heartbeat']);

    //Education
    $menu->dropdown(trans('admin.menus.education.title'), function ($sub) {
        $sub->route('admin.teachers.index', trans('admin.menus.education.teachers'), [], 1);
        $sub->route('admin.education.time_table', trans('admin.menus.education.time_table'), [], 2);
    }, 6, ['icon' => 'fa fa-book']);

    //Article
    $menu->dropdown(trans('admin.menus.articles.title'), function ($sub) {
        $sub->route('admin.articles.index', trans('admin.menus.articles.all'), [], 1);
        $sub->route('admin.articles.create', trans('admin.menus.articles.create'), [], 2);
        $sub->divider(3);
        $sub->route('admin.categories.index', trans('admin.menus.categories'), [], 4);
    }, 7, ['icon' => 'fa fa-book']);

    //Staff
    $menu->dropdown(trans('admin.menus.staffs.title'), function ($sub) {
        $sub->route('admin.staffs.index', trans('admin.menus.staffs.all'), [], 1);
        $sub->route('admin.staffs.create', trans('admin.menus.staffs.create'), [], 2);
    }, 8, ['icon' => 'fa fa-book']);

    //Users
    $menu->dropdown(trans('admin.menus.users.title'), function ($sub) {
        $sub->route('admin.users.index', trans('admin.menus.users.all'), [], 1);
        $sub->route('admin.users.create', trans('admin.menus.users.create'), [], 2);
        $sub->divider(3);
        $sub->route('admin.roles.index', trans('admin.menus.roles'), [], 4);
        $sub->route('admin.permissions.index', trans('admin.menus.permissions'), [], 5);
    }, 9, ['icon' => 'fa fa-users']);
});