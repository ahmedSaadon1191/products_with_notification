<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Category;
use App\Admin\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class subCategoriesController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::all();
        $categories = Category::all();
        return view('admin.subCategories.index',compact('subCategories','categories'));
    }

    public function store(Request $request)
    {
        // return $request;
        try
        {
            $create = SubCategory::create(
                [
                    'name' => $request->name,
                    'category_id' => $request->category_id,
                ]);
                return redirect()->route('sub_Categories.index')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Throwable $th)
        {
            return $th;
            return redirect()->route('sub_Categories.index')->with(['errors' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }

    public function update($id,Request $request)
    {
        // return $request;
        try
        {
            $subCategory = SubCategory::find($id);
            if (!$subCategory)
            {
                return redirect()->route('sub_Categories.index')->with(['errors' => 'هذها العنصر غير موجود']);

            }else
            {
                $update = $subCategory->update(
                    [
                        'name' => $request->name,
                        'category_id' => $request->category_id,
                    ]);
                return redirect()->route('sub_Categories.index')->with(['success' => 'تم التعديل بنجاح']);
            }


        } catch (\Throwable $th)
        {
            return $th;
            return redirect()->route('sub_Categories.index')->with(['errors' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }

    public function destroy($id)
    {
        try
        {
            $subCategory = SubCategory::find($id);
            if (!$subCategory)
            {
                return redirect()->route('sub_Categories.index')->with(['error' => 'هذا العنصر غير موجود']);

            }else
            {
                $subCategory->delete();
                // $subCategory->save();
                return redirect()->route('sub_Categories.index')->with(['success' => 'تم تعديل القسم بنجاح']);
            }

        } catch (\Throwable $th)
        {
             // return $th;
             return redirect()->route('sub_Categories.index')->with(['error' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }
}
