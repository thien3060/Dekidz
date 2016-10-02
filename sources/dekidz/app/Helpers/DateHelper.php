<?php

namespace App\Helpers;

class DateHelper {

    public static function sqlDateFormat($date) {
        if ($date) {
            return  date('Y-m-d', strtotime($date));
        }
        return "";
    }
}