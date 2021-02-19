<?php
 namespace App\Http\View\Composers;

use App\Models\Categories;
use App\Models\MainSettings\Themes;
use Illuminate\View\View;

 class ThemesComposer
 {
     public function compose(View $view)
     {
         $view->with('themes', Themes::first());
         $view->with('Menucategories',Categories::with('childs')->whereNull('parent_id')->get());
     }
 }
