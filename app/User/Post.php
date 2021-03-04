<?php

namespace App\User;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = "posts";
    protected $guarded = [];


    // RELATIONS

    // ONE TO MANY WITH USERS TABLE
        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        // ONE TO MANY WITH IMAGES POST TABLE
        public function ImagesPost()
        {
            return $this->hasMany('App\User\ImagesPost')->withTrashed();
        }


        // OTHER METHODS
    public function Status()
    {
       return $this->is_active == 1 ? 'مفعل' : 'في انتظار الموافقة';
    }


}
