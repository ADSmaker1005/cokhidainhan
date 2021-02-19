<?php
 namespace App\Http\View\Composers;

use App\Models\Categories;
use App\Models\MainSettings\Footer;
use App\Models\MainSettings\Themes;
use Illuminate\View\View;

 class PartialsComposer
 {
     public function compose(View $view)
     {
         $view->with('Menucategories',Categories::with('childs')->whereNull('parent_id')->get());
         $view->with('FooterCategories',Categories::all());
         $view->with('footer',Footer::first());
     }
 }
