<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    public function store(Request $request)
    {
        try
        {

            $create = Category::create(
                [
                    'name' => $request->name
                ]);
                return redirect()->route('categories.index')->with(['success' => 'تم حفظ العلامة التجارية بنجاح']);

        }catch (\Throwable $th)
        {
            // return $th;
            return redirect()->route('categories.index')->with(['error' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }



    public function update($id,Request $request)
    {
        // return $request;
        try
        {
            $category = Category::find($id);
            if (!$category)
            {
                return redirect()->route('categories.index')->with(['error' => 'هذا العنصر غير موجود']);
            }else
            {
                $update = $category->update(
                    [
                        'name' => $request->name
                    ]);
                    return redirect()->route('categories.index')->with(['success' => 'تم تعديل القسم بنجاح']);
            }

        } catch (\Throwable $th)
        {
             // return $th;
             return redirect()->route('categories.index')->with(['error' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }

    public function destroy($id)
    {
        try
        {
            $category = Category::find($id);
            if (!$category)
            {
                return redirect()->route('categories.index')->with(['error' => 'هذا العنصر غير موجود']);

            }else
            {
                $category->delete();
                // $category->save();
                return redirect()->route('categories.index')->with(['success' => 'تم تعديل القسم بنجاح']);
            }

        } catch (\Throwable $th)
        {
             // return $th;
             return redirect()->route('categories.index')->with(['error' => 'هناك خطا ما برجاء المحاولة فيما بعد']);
        }
    }
}
