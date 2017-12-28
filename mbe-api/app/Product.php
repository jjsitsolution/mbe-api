<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    //
    protected $primaryKey = 'product_id';
    protected $dates = ['deleted_at'];
    protected  $fillable = [
        'product_code',
        'product_desc',
        'product_name',
        'on_hand',
        'on_hand',
        'category_id',
        'brand_id',
        'unit_id',
        'deleted_by',
        'updated_by',
        'created_by'
    ];

}
