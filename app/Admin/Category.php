<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $guarded = [];

    // RELATIONS

    // ONE TO MANY WITH SUB CATEGORY TABLE
        public function sub_categories()
        {
            return $this->hasMany('App\Admin\SubCategory');
        }


}
