<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'name_product',
        'short_description',
        'feature_image',
        'information',
        'price',
        'old_price',
        'quantity',
        'id_category',
        'views',
    ];

    public function cate()
    {
        return $this->belongsTo('App\Category','id_category','id');
    }
}
