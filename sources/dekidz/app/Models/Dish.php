<?php
/**
 * Created by PhpStorm.
 * User: xuanthudoan
 * Date: 10/3/16
 * Time: 8:23 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Dish extends Model
{
    protected $table = 'dishes';
    protected $fillable = [
        'type_id',
        'name',
        'preparing_description',
        'cooking_description',
        'chef',
        'protid_dv',
        'protid_tv',
        'lipid_dv',
        'lipid_tv',
        'glucid',
        'calo',
        'canxi',
        'photpho',
        'iron',
        'vitamina',
        'vitamina',
        'vitaminb1',
        'vitaminb2',
        'vitaminpp',
        'vitaminc'
    ];
}