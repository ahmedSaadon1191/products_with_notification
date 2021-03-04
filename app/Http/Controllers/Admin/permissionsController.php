<?php

namespace App\Http\Controllers\Admin;

use App\User\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class permissionsController extends Controller
{
    public function index()
    {
        $posts = Post::onlyTrashed()->with('ImagesPost')->get();
        return view('admin.permissions.index',compact('posts'));
    }

    public function abrove($id)
    {
            $post_restore = Post::withTrashed()->with('ImagesPost')->find($id);
        DB::beginTransaction();
            if ($post_restore->ImagesPost && $post_restore->ImagesPost->count() > 0)
            {
                $post_restore->ImagesPost()->restore();
            }
            $post_restore->restore();
        DB::commit();
        DB::rollback();

            return \response()->json(
                [
                    'status' => true,
                    'msg' => 'تم التفعيل بنجاح',
                    'id' => $post_restore->id
                ]);
    }

    public function unAbrove($id)
    {
            $post_delete = Post::withTrashed()->with('ImagesPost')->find($id);
        DB::beginTransaction();
            if ($post_delete->ImagesPost && $post_delete->ImagesPost->count() > 0)
            {
                foreach ($post_delete->ImagesPost as $value)
                {
                    Storage::disk('public')->delete('/admin/images/',$value->photo);
                }
                
                $post_delete->ImagesPost()->forceDelete();
            }

            $post_delete->forceDelete();

        DB::commit();
        DB::rollback();

            return \response()->json(
                [
                    'status' => true,
                    'msg' => 'تم الغاء التفعيل بنجاح',
                    'id' => $post_delete->id
                ]);
    }
}
