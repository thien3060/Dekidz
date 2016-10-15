<?php
/**
 * Created by PhpStorm.
 * User: xuanthudoan
 * Date: 10/3/16
 * Time: 8:23 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = [
        'name',
        'type',
        'product_type'
    ];
}