<?php

namespace App\Admin;

use App\Admin\Product;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $table = "image_products";
    protected $guarded = [];


    // RELATIONS

    // ONE TO MANY WITH PRODUCT TABLE
        public function product()
        {
            return $this->belongsTo(Product::class, 'product_id');
        }
}
