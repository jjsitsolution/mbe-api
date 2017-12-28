<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRole extends Model
{
    use SoftDeletes;
    //
    protected $primaryKey = 'user_role_id';
    protected $dates = ['deleted_at'];
    protected  $fillable = [
        'user_role_desc',
        'user_role_name',
        'deleted_by',
        'updated_by',
        'created_by'
    ];

}
