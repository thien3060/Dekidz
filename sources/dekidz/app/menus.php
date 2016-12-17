<?php

$rightMenu = Menu::instance('admin-menu-right');

$leftMenu = Menu::create('admin-menu', function ($menu) {
    $menu->enableOrdering();
    $menu->setPresenter('Pingpong\Admin\Presenters\SidebarMenuPresenter');
    //Dashboard
    $menu->route('admin.home', trans('admin.menus.dashboard'), [], 0, ['icon' => 'fa fa-dashboard']);

    //Students
    $menu->dropdown(trans('admin.menus.students.title'), function ($sub) {
        $sub->route('admin.students.index', trans('admin.menus.students.title'), [], 1);
        $sub->route('admin.grades.index', trans('admin.menus.grades.title'), [], 2);
        $sub->route('admin.physical_infos.index', trans('admin.menus.physical_infos.all'), [], 3);
        $sub->route('admin.tuition_fees.index', trans('admin.menus.students.tuition_fee'), [], 4);
    }, 1, ['icon' => 'fa fa-smile-o'], 'manage_students');

    //Classes
    $menu->dropdown(trans('admin.menus.classes.title'), function ($sub) {
        $sub->route('admin.classes.index', trans('admin.menus.classes.all'), [], 1);
        $sub->route('admin.classes.create', trans('admin.menus.classes.create'), [], 2);
        $sub->route('admin.study_results.index', trans('admin.menus.classes.study_result'), [], 3);
    }, 2, ['icon' => 'fa fa-graduation-cap'], 'manage_classes');

    //Finances
    $menu->dropdown(trans('admin.menus.finances.title'), function ($sub) {
        $sub->route('admin.rem_ins.index', trans('admin.menus.finances.rem_in'), [], 1);
        $sub->route('admin.rem_outs.index', trans('admin.menus.finances.rem_out'), [], 2);
    }, 3, ['icon' => 'fa fa-usd'], 'manage_finances');

    //Repository
    $menu->dropdown(trans('admin.menus.repository.title'), function ($sub) {
        $sub->route('admin.assets.index', trans('admin.menus.repository.assets.title'), [], 1);
        $sub->route('admin.suppliers.index', trans('admin.menus.repository.suppliers.title'), [], 2);
        $sub->route('admin.import_food.index', trans('admin.menus.repository.import.food'), [], 3);
        $sub->route('admin.import_asset.index', trans('admin.menus.repository.import.asset'), [], 4);
        $sub->route('admin.exports.index', trans('admin.menus.repository.export'), [], 5);
        $sub->route('admin.export_assets.index', trans('admin.menus.repository.export_asset'), [], 6);
        $sub->route('admin.maintenance_ballots.index', trans('admin.menus.repository.maintenance_ballot'), [], 7);
    }, 4, ['icon' => 'fa fa-usd'], 'manage_repository');

    //Nutrition
    $menu->dropdown(trans('admin.menus.nutrition.title'), function ($sub) {
        $sub->route('admin.dishes.index', trans('admin.menus.nutrition.dishes'), [], 1);
        $sub->route('admin.foods.index', trans('admin.menus.nutrition.food'), [], 2);
        $sub->route('admin.foodsets.index', trans('admin.menus.nutrition.food_set'), [], 3);
        $sub->route('admin.foodgroups.index', trans('admin.menus.nutrition.foodgroup'), [], 4);
        $sub->route('admin.foodsettypes.index', trans('admin.menus.nutrition.foodsettype'), [], 5);
        $sub->route('admin.dishtypes.index', trans('admin.menus.nutrition.dishtype'), [], 6);
        $sub->route('admin.energy_needs.index', trans('admin.menus.nutrition.energy_need'), [], 7);
        $sub->route('admin.menus.index', trans('admin.menus.nutrition.menu'), [], 8);
    }, 5, ['icon' => 'fa fa-heartbeat'], 'manage_nutrition');

    //Education
    $menu->dropdown(trans('admin.menus.education.title'), function ($sub) {
        $sub->route('admin.teach_schedules.index', trans('admin.menus.education.teach_schedules.title'), [], 2);
        $sub->route('admin.subject_topics.index', trans('admin.menus.education.subject_topic.title'), [], 3);
        $sub->route('admin.lessons.index', trans('admin.menus.education.lesson'), [], 4);
    }, 6, ['icon' => 'fa fa-book'], 'manage_education');

    //Article
    $menu->dropdown(trans('admin.menus.articles.title'), function ($sub) {
        $sub->route('admin.articles.index', trans('admin.menus.articles.all'), [], 1);
        $sub->route('admin.articles.create', trans('admin.menus.articles.create'), [], 2);
        $sub->divider(3);
        $sub->route('admin.categories.index', trans('admin.menus.categories'), [], 4);
    }, 7, ['icon' => 'fa fa-book'], 'manage_articles');

    //Staff
    $menu->dropdown(trans('admin.menus.staffs.title'), function ($sub) {
        $sub->route('admin.staffs.index', trans('admin.menus.staffs.title'), [], 1);
        $sub->route('admin.staff_types.index', trans('admin.menus.staffs.staff_types.title'), [], 2);
        $sub->route('admin.departments.index', trans('admin.menus.departments.title'), [], 3);
        $sub->route('admin.salaries.index', trans('admin.menus.staffs.salaries.all'), [], 4);
    }, 8, ['icon' => 'fa fa-book'], 'manage_staffs');

    //Users
    $menu->dropdown(trans('admin.menus.users.title'), function ($sub) {
        $sub->route('admin.users.index', trans('admin.menus.users.all'), [], 1);
        $sub->route('admin.users.create', trans('admin.menus.users.create'), [], 2);
        $sub->divider(3);
        $sub->route('admin.roles.index', trans('admin.menus.roles'), [], 4);
        $sub->route('admin.permissions.index', trans('admin.menus.permissions'), [], 5);
    }, 9, ['icon' => 'fa fa-users'], 'manage_users');
});