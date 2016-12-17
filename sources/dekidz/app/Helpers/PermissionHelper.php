<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class PermissionHelper {

    public static function check($permission) {
        return Auth::user()->can($permission);
    }
}