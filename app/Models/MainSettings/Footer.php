<?php

namespace App\Models\MainSettings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footer';
    protected $fillable = ['_token','_method','header1','content1','header2','header3','content2'];
}
