<?php
/**
 * Created by PhpStorm.
 * User: xuanthudoan
 * Date: 10/3/16
 * Time: 8:23 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthStandardIndex extends Model
{
    protected $table = 'health_standard_index';
    protected $fillable = [
        'height',
        'weight',
        'gender',
        'month'
    ];
}