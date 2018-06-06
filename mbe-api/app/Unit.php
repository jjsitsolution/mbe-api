<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use SoftDeletes;
    //
    protected $primaryKey = 'unit_id';
    protected $dates = ['deleted_at'];
    protected  $fillable = [
        'unit_name',
        'unit_desc',
        'unit_name',
        'deleted_by',
        'updated_by',
        'created_by'
    ];

}
