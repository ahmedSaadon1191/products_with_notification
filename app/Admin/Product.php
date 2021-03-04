<?php

namespace App\Admin;


use App\Admin\SubCategory;
use App\Admin\ImageProduct;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = "products";
    protected $guarded = [];


    // RELATIONS

    // ONE TO MANY WITH SUB CATEGORY TABLE
        public function sub_category()
        {
            return $this->belongsTo(SubCategory::class, 'sub_category_id');
        }


    // ONE TO MANY WITH SUB IMAGE PRODUCT TABLE
        public function images_product()
        {
            return $this->hasMany(ImageProduct::class);
        }
}
