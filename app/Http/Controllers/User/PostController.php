<?php

namespace App\Http\Controllers\User;

use App\User\Post;
use App\User\ImagesPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostsRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user','ImagesPost')->get();
        // return $posts;
        return view('website.posts.index',compact('posts'));
    }

    public function create()
    {
        return view('website.posts.create');
    }

    public function store(Request $request)
    {
        // return $request;
        try
        {
        DB::rollback();
            $create = Post::create(
                [
                    'title'         => $request->title,
                    'discreption'   => $request->discreption,
                    'user_id'       => auth()->user()->id,
                ]);

        // CHECK IF IMAGES IS FOUND
            if ($request->hasFile('image'))
            {
                $IMAGES = $request->image;
                // return $IMAGES;

                foreach($IMAGES as $postPhotos)
                {
                    $createImage = ImagesPost::create(
                        [
                            'photo'            => $postPhotos->store('posts','public'),
                            'post_id'          => $create->id
                        ]);
                        $createImage->delete();
                }
            }

            // SOFT DELETE POSTWAITING FOR ADMIN APROVE
             $last = Post::latest()->first();
             $last->delete();

        DB::commit();
                return redirect()->route('posts.index')->with(['success' => 'تم اضافة المقال بنجاح']);

        } catch (\Throwable $th)
        {
              return $th;
              DB::rollback();
              return redirect()->route('posts.index')->with(['error' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }

    public function edit($id)
    {
        $post = Post::withTrashed()->with('ImagesPost')->find($id);
        // $images = Post::with('ImagesPost')->whereHas('ImagesPost')->get();

        // return $post;
        try
        {
            if (!$post)
            {
                return redirect()->route('posts.index')->with(['errors' => 'هذا المقال غير موجود']);
            }else
            {
                return view('website.posts.edit',compact('post'));
            }

        } catch (\Throwable $th)
        {
             return $th;
             return redirect()->route('posts.index')->with(['error' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }


    public function imageId($id)
    {
        $img = ImagesPost::withTrashed()->find($id);
        if ($img)
        {
            Storage::disk('public')->delete('/admin/images/',$img->photo);
            $img->delete();
            return response()->json(
               [
                    'status'    => true,
                    'msg'       => 'تم حزف الصورة بنجاح',
               ]);
        }
    }


    public function update($id,PostsRequest $request)
    {
        $post = Post::withTrashed()->with('ImagesPost')->find($id);
        // return $request;
        try
        {
            if (!$post)
            {
                return redirect()->route('posts.index')->with(['errors' => 'هذا المقال غير موجود']);
            }else
            {
            DB::beginTransaction();
                $update = $post->update(
                    [
                        'title'         => $request->title,
                        'discreption'   => $request->discreption,
                        'user_id'       => auth()->user()->id,
                        'status'        => $post->status,
                    ]);


                     // UPDATE POST IMAGES
                     if ($request->hasFile('image'))
                     {
                         $IMAGES = $request->image;

                         foreach($IMAGES as $images)
                         {
                             $createImage = ImagesPost::create(
                                 [
                                     'photo'            => $images->store('posts','public'),
                                     'post_id'          => $request->id
                                 ]);
                         }
                     }
            DB::commit();

                return redirect()->route('posts.index')->with(['success' => 'تم تعديل المقال بنجاح']);
            }

        } catch (\Throwable $th)
        {
             // return $th;
             DB::rollback();
             return redirect()->route('posts.index')->with(['error' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        try
        {
            if (!$post)
            {
                return redirect()->route('posts.index')->with(['errors' => 'هذا المقال غير موجود']);
            }else
            {
                $post->delete();
                $post->save();

                return redirect()->route('posts.index')->with(['success' => 'تم تعديل المقال بنجاح']);
            }

        } catch (\Throwable $th)
        {
             // return $th;
             return redirect()->route('posts.index')->with(['error' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }

    public function softDelete()
    {
        $deletedPosts = Post::onlyTrashed()->where('user_id',auth()->user()->id)->with('ImagesPost')->get();
        // return $deletedPosts;
        return view('website.posts.softDelete',compact('deletedPosts'));
    }

    public function forceDelete($id)      // DELETE ITEMS FROM ORDER DETAILES TABLE IF I DON,T CREATED NEW ORDER
    {
        // GET POST TO DELETE IT
            $post = Post::withTrashed()->with('ImagesPost')->find($id);
            // return $post;

         try
         {
            if (!$post && $post->count() > 0)
            {
                return redirect()->back()->with(['errors' => 'هذا المقال غير موجود']);

            }else
            {
            DB::beginTransaction();
                // DELETE IMAGES POST
                    if ($post->ImagesPost && $post->ImagesPost->count() > 0)
                    {
                        foreach ($post->ImagesPost as $image)
                        {
                           $image->forceDelete();
                        }
                        $post->forceDelete();
            DB::commit();
                        return redirect()->back()->with(['success' => 'تم حزف المقال بنجاح']);
                    }else
                    {
                        $post->forceDelete();
                        return redirect()->back()->with(['success' => 'تم حزف المقال بنجاح']);
                    }

            }
         } catch (\Throwable $th)
         {
              // return $th;
              DB::rollback();
              return redirect()->route('posts.index')->with(['error' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
         }
    }


}
