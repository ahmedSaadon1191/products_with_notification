<?php

namespace App\User;

use App\User\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImagesPost extends Model
{
    use SoftDeletes;

    protected $table ="images_posts";
    protected $guarded = [];



     // RELATIONS

    // ONE TO MANY WITH POST TABLE
    public function user()
    {
        return $this->belongsTo(Post::class, 'post_id')->withTrashed();
    }
}
