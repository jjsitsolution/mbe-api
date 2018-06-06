<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    //
    protected $primaryKey = 'customer_id';
    protected $dates = ['deleted_at'];
    protected  $fillable = [
        'customer_fname',
        'customer_lname',
        'customer_mname',
        'complete_address',
        'billing_address',
        'shipping_address',
        'customer_email',
        'customer_mobile',
        'province',
        'municipality',
        'barangay',
        'customer_avatar',
        'deleted_by',
        'updated_by',
        'created_by'
    ];

}
