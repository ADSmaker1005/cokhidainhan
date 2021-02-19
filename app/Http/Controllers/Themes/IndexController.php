<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        $categories = Categories::all();
        return view('themes.index',compact('banner','categories'));
    }

    public function view(Request $request,$slug)
    {
        $categories = Categories::all();
        if($request->type == 0)
        {
            $postCategories = Categories::where('slug',$slug)->where('type',0)->first();
            return view('themes.slug.posts',compact('postCategories','categories'));
        }else
        if($request->type == 1)
        {
            $productCategory = Categories::where('slug',$slug)->where('type',1)->first();
            return view('themes.slug.products',compact('productCategory','categories'));
        }else{

        }
    }

    public function show($slug,$name)
    {
            if(Categories::where('slug',$slug)->first()->type == 0)
            {
                $categories = Categories::where('slug',$slug)->first();
                $posts = $categories->posts->where('slug',$name)->first();
                return view('themes.show.posts',compact('categories','posts'));
            }

            if(Categories::where('slug',$slug)->first()->type == 1)
            {
                $categories = Categories::where('slug',$slug)->first();
                $products = $categories->products->where('slug',$name)->first();
                return view('themes.show.products',compact('categories','products'));
            }
    }
}
