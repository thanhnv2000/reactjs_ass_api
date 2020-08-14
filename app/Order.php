<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'id_user',
        'name',
        'address',
        'phone_number',
        'status',
        'total_price',
    ];
}
