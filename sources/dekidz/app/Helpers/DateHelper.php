<?php

namespace App\Helpers;

class DateHelper {

    public static function sqlDateFormat($date) {
        if ($date) {
            return  date('Y-m-d', strtotime($date));
        }
        return "";
    }

    public static function normalDateFormat($date) {
        if ($date) {
            return  date('m/d/Y', strtotime($date));
        }
        return "";
    }
}