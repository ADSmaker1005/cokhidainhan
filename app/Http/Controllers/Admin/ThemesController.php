<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainSettings\Themes;
use Illuminate\Http\Request;

class ThemesController extends Controller
{
    public function index()
    {
        $themes = Themes::all()->first();
        return view('admin.themes',compact('themes'));
    }

    public function update(Request $request)
    {
        if(Themes::first() != null)
        {
            Themes::first()->update($request->all());
        }else{
            Themes::FirstOrCreate($request->all());
        }
        return redirect()->route('admin.themes.index')->with('success','Cập nhật giao diện thành công');
    }
}
