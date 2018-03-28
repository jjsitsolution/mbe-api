<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    //
    protected $primaryKey = 'brand_id';
    protected $dates = ['deleted_at'];
    protected  $fillable = [
        'brand_name',
        'brand_desc',
        'deleted_by',
        'updated_by',
        'created_by'
    ];

}
