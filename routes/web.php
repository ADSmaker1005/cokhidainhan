<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::namespace('App\Http\Controllers\Admin')->middleware(['auth:sanctum', 'verified'])->name('admin.')->prefix('admin/control')->group(function(){
    Route::get('form/index','FormController@index')->name('form.index');
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::group(['prefix' => '/themes'], function () {
        Route::get('/','ThemesController@index')->name('themes.index');
        Route::post('/','ThemesController@update')->name('themes.update');
    });

    Route::group(['prefix' => '/footer'], function () {
        Route::get('/','FooterController@index')->name('footer.index');
        Route::post('/','FooterController@update')->name('footer.update');
    });

    Route::group(['prefix' => 'banner'], function () {
        Route::get('/','BannerController@index')->name('banner.index');
        Route::post('/create','BannerController@store')->name('banner.store');
        Route::post('/update/{id}','BannerController@update')->name('banner.update');
        Route::POST('/update/inline','BannerController@inline')->name('banner.inline');
        Route::delete('/delete/{id}','BannerController@destroy')->name('banner.destroy');
        Route::get('ajax-get-banner-by/{id}','BannerController@ajax')->name('banner.ajax');
    });

    Route::get('/file-manager','FileManagerController@index')->name('filemanager.index');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/','CategoriesController@index')->name('categories.index');
        Route::post('/create','CategoriesController@store')->name('categories.store');
        Route::POST('/update/{id}','CategoriesController@update')->name('categories.update');
        Route::get('/update/{id}','CategoriesController@updateParent')->name('categories.updateParent');
        Route::POST('/update/inline','CategoriesController@inline')->name('categories.inline');
        Route::delete('/delete/{id}','CategoriesController@destroy')->name('categories.destroy');
        Route::get('/ajax/{id}','CategoriesController@ajaxGetById')->name('categories.ajax');
        //sort
        Route::get('/sort-categories','CategoriesController@sortIndex')->name('categories.sort.index');
        Route::post('/categories-list/sort','CategoriesController@sortUpdate')->name('categories.sort.update');
    });

    Route::group(['prefix' => 'posts'], function () {
        Route::get('/','PostsController@index')->name('posts.index');
        Route::get('/create','PostsController@create')->name('posts.create');
        Route::post('/store','PostsController@store')->name('posts.store');
        Route::get('/show/{id}','PostsController@show')->name('posts.show');
        Route::post('/update/{id}','PostsController@update')->name('posts.update');
        Route::delete('/destroy/{id}','PostsController@destroy')->name('posts.destroy');
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/','ProductsController@index')->name('products.index');
        Route::get('/create','ProductsController@create')->name('products.create');
        Route::post('/store','ProductsController@store')->name('products.store');
        Route::get('/show/{id}','ProductsController@show')->name('products.show');
        Route::post('/update/{id}','ProductsController@update')->name('products.update');
        Route::delete('/destroy/{id}','ProductsController@destroy')->name('products.destroy');

    });

});

Route::namespace('App\Http\Controllers\Themes')->group(function(){
    Route::get('/','IndexController@index')->name('index');
    Route::get('/{slug}','IndexController@view')->name('view');
    Route::get('/{slug}/{name}','IndexController@show')->name('show');
});

Route::get('cli/artisan/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('optimize');
    return redirect()->route('index')->with('success','Cache clear');
});
