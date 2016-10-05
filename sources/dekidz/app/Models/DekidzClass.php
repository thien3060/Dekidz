<?php
/**
 * Created by PhpStorm.
 * User: xuanthudoan
 * Date: 10/3/16
 * Time: 8:23 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class DekidzClass extends Model
{
    protected $table = 'classes';
    protected $fillable = [
        'name',
        'teacher_id',
        'room_number',
        'grade_id',
        'accountability'
    ];
}