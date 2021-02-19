<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $form = Form::all();
        return view('admin.form.index',compact('form'));
    }

    public function store(Request $request)
    {
        Form::create($request->all());
        return back()->with('success','Gửi thành công !');
    }
}
