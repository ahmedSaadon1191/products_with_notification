<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = "sub_categories";
    protected $guarded = [];


    // RELATIONS

    // ONE TO MANY WITH CATEGORY TABLE
        public function category()
        {
            return $this->belongsTo('App\Admin\Category', 'category_id');
        }

    // ONE TO MANY WITH PRODUCT TABLE
        public function products()
        {
            return $this->hasMany('App\Admin\Product');
        }

}
