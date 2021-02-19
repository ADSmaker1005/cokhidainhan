<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('admin.products.index',compact('products'));
    }
    public function create()
    {
        $categories = Categories::where('type',1)->get();
        return view('admin.products.form',compact('categories'));
    }

    public function store(Request $request)
    {
            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'keywords' => $request->keywords,
                'name' => $request->name,
                'slug' => $request->slug,
                'locate' => $request->locate,
                'img' => $request->img,
                'text' => $request->text,
                'infoname' => serialize($request->infoname),
                'infotext' => serialize($request->infotext),
                'content' => $request->content
            ];
            $post = Products::create($data);
            Products::FindOrFail($post->id)->Categories()->attach($request->categories);
            return redirect()->route('admin.products.index')->with('success','Thêm bài viết thành công !');
    }

    public function show($id)
    {
        $categories = Categories::where('type',1)->get();
        $products = Products::FindOrFail($id);
        return view('admin.products.form',compact('products','categories'));
    }
    public function update(Request $request,$id)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'name' => $request->name,
            'slug' => $request->slug,
            'locate' => $request->locate,
            'img' => $request->img,
            'text' => $request->text,
            'infoname' => serialize($request->infoname),
            'infotext' => serialize($request->infotext),
            'content' => $request->content
        ];
            Products::FindOrFail($id)->update($data);
            Products::FindOrFail($id)->Categories()->sync($request->categories);
            return redirect()->route('admin.products.index')->with('warning','Cập nhật bài viết thành công !');
    }

    public function destroy($id)
    {
        Products::FindOrFail($id)->Categories()->detach();
        Products::FindOrFail($id)->delete();
        return redirect()->route('admin.products.index')->with('danger','Cập nhật bài viết thành công !');
    }
}
