<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classification extends Model
{
    use SoftDeletes;
    //
    protected $primaryKey = 'classification_id';
    protected $dates = ['deleted_at'];
    protected  $fillable = [
        'classification_name',
        'classification_desc',
        'classification_name',
        'deleted_by',
        'updated_by',
        'created_by'
    ];

}
