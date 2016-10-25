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


class Asset extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'assets';
    protected $fillable = [
        'name',
        'quantity',
        'maintenance_mode',
        'unit'
    ];

    public function imports(){
        return $this->belongsToMany('App\Models\Import', 'import_detail', 'good_id', 'import_id')->withPivot('supplier', 'quantity', 'cost');
    }

    public function export_assets(){
        return $this->belongsToMany('App\Models\ExportAsset', 'export_detail', 'good_id', 'export_id')->withPivot('quantity');
    }
}