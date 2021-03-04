<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Product;
use App\Admin\ImageProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ImageProductController extends Controller
{
    public function index()
    {
        $products       = Product::all();
        $imagesProduct  = ImageProduct::with('product')->get();

        return view('admin.images_product.index',compact('products','imagesProduct'));
    }

    public function store(Request $request)
    {
        // return $request;

        try
        {

            // CHECK IF IMAGES IS FOUND
            if ($request->hasFile('image'))
            {
                $IMAGES = $request->image;

                foreach($IMAGES as $proPhotos)
                {
                    $create = ImageProduct::create(
                        [
                            'photo'            => $proPhotos->store('products','public'),
                            'product_id'        => $request->product_id
                        ]);

                }
                return redirect()->route('imagesProduct.index')->with(['success' => 'Project Images Created Successfaly']);
            }
        }catch (\Throwable $th)
        {
            return $th;

            DB::rollback();
            return \redirect()->route('imagesProduct.index')->with(['error' => 'Something Error Please Try Again Later']);
        }

    }

    public function update($id,Request $request)
    {
       try
       {
            $photo = ImageProduct::find($id);
            // return $photo;

            if($photo)
            {
                $photo->update(
                    [
                        'photo'            => $photo->store('products','public'),
                        'product_id'        => $request->product_id
                    ]);
                    // Storage::disk('public')->delete('/admin/images/',$photo->image);
            }

       } catch (\Throwable $th)
       {
        return $th;

            DB::rollback();
            return \redirect()->route('imagesProduct.index')->with(['error' => 'Something Error Please Try Again Later']);
       }
    }
}
