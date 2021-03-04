<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Product;
use App\Admin\Category;
use App\Admin\SubCategory;
use App\Admin\ImageProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use Illuminate\Support\Facades\Storage;

class productsController extends Controller
{
    public function index()
    {
        $products = Product::with('sub_category')->get();
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $images = Product::with('images_product')->whereHas('images_product')->get();
        // return $images;
        return view('admin.products.index',compact('subCategories','categories','products','images'));
    }

    public function get_subCategory($id)
    {
        $subCategory = SubCategory::where('category_id',$id)->get();
        return \response()->json($subCategory);
    }

    public function store(ProductsRequest $request)
    {
        // return $request;
        try
        {
        DB::beginTransaction();
            $create = Product::create(
                [
                    'name'              => $request->name,
                    'sub_category_id'   => $request->sub_category_id,
                    'price'             => $request->price,
                    'discreption'       => $request->discreption,
                ]);



                // CREATE PRODUCT IMAGES

                 // CHECK IF IMAGES IS FOUND
            if ($request->hasFile('image'))
            {
                $IMAGES = $request->image;

                foreach($IMAGES as $proPhotos)
                {
                    $createImage = ImageProduct::create(
                        [
                            'photo'            => $proPhotos->store('products','public'),
                            'product_id'       => $create->id
                        ]);

                }
            }



        DB::commit();

                return redirect()->route('products.index')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Throwable $th)
        {
            return $th;
            DB::rollback();
            return redirect()->route('products.index')->with(['errors' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }

    public function imageId($id)
    {
        // return "yes";
        $img = ImageProduct::find($id);
        // return $img;
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

    public function update($id,ProductsRequest $request)
    {
        // return $request;
        try
        {
            $products = Product::find($id);
            if (!$products)
            {
                return redirect()->route('products.index')->with(['errors' => 'هذها العنصر غير موجود']);

            }else
            {
            DB::beginTransaction();
                $update = $products->update(
                    [
                        'name'              => $request->name,
                        'sub_category_id'   => $request->sub_category_id,
                        'price'             => $request->price,
                        'discreption'       => $request->discreption,
                    ]);

                // UPDATE PRODUCT IMAGES
                    if ($request->hasFile('image'))
                    {
                        $IMAGES = $request->image;

                        foreach($IMAGES as $proPhotos)
                        {
                            $createImage = ImageProduct::create(
                                [
                                    'photo'            => $proPhotos->store('products','public'),
                                    'product_id'       => $request->id
                                ]);
                        }
                    }

                DB::commit();
                return redirect()->route('products.index')->with(['success' => 'تم التعديل بنجاح']);
            }


        } catch (\Throwable $th)
        {
            return $th;
            DB::rollback();
            return redirect()->route('products.index')->with(['errors' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }

    public function destroy($id)
    {
        try
        {
            $product = Product::with('images_product')->find($id)->delete();
            return redirect()->back();
            // $images = ImageProduct::where('product_id',$product->id)->get();

            // return $images;
            // $images()->delete();


            if (!$product)
            {
                return redirect()->back()->with(['error' => 'هذا المنتج غير موجود']);
            }else
            {
            DB::beginTransaction();
                if ($product->images_product && $product->images_product->count() > 0)
                {
                    // return "yes";
                    // foreach ($images as $image)
                    // {
                    //      $image->delete();
                    //     // return $images->count();
                    //     // Storage::disk('public')->delete('/admin/images/',$images->photo);

                    // }
                    // $product->images_product->delete();


                    return redirect()->back()->with(['success' => 'تم حزف المنتج بنجاح']);

                }else
                {
                    $product->delete();
                    return redirect()->back()->with(['success' => 'تم حزف المنتج بنجاح']);
                }
            DB::commit();
            }

        } catch (\Throwable $th)
        {
            return $th;
            DB::rollback();
            return redirect()->route('products.index')->with(['errors' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }
}
