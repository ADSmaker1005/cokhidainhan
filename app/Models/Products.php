<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable = ['title','description','keywords','name','slug','locate','img','carousel','text','infoname','infotext','content'];

    public function Categories()
    {
        return $this->belongsToMany(Categories::class,'categories_products','product_id','category_id');
    }
}
