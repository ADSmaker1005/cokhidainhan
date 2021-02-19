<?php

namespace App\Models\MainSettings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    use HasFactory;
    protected $table = 'themes';
    protected $fillable = [
        '_token',
        'title',
        'description',
        'keywords',
        'hotline',
        'email',
        'time',
        'logo',
        'favicon',
        'icon',
        'schema',
        'headtag',
        'zalo',
        'fanpage',
        'banner',
        'aboutheader',
        'abouttext',
        'aboutcontent',
        'aboutmedia',
        'aboutheader2',
        'abouttext2',
        'aboutcontent2',
        'abouturl2',
        'backgroundnews',
        'map',
        'header1',
        'text1',
        'header2',
        'text2',
        'header3',
        'text3',
        'css'
    ];
}
