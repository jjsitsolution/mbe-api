<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
    //
    protected $primaryKey = 'supplier_id';
    protected $dates = ['deleted_at'];
    protected  $fillable = [
        'supplier_name',
        'supplier_desc',
        'supplier_email',
        'supplier_address',
        'supplier_mobile',
        'supplier_landline',
        'deleted_by',
        'updated_by',
        'created_by'
    ];

}
