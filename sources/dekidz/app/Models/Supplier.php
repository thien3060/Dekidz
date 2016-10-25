<?php
/**
 * Created by PhpStorm.
 * User: xuanthudoan
 * Date: 10/3/16
 * Time: 8:23 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Supplier extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'suppliers';
    protected $fillable = [
        'name',
        'type',
        'email',
        'phone',
        'product_type'
    ];
}