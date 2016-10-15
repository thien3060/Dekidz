<?php
/**
 * Created by PhpStorm.
 * User: xuanthudoan
 * Date: 10/3/16
 * Time: 8:23 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Asset extends Model
{
    protected $table = 'assets';
    protected $fillable = [
        'name',
        'quantity',
        'supplier',
        'import_date',
        'maintenance_mode',
        'unit'
    ];
}