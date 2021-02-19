@extends('themes.app')
@section('title')
{{ $productCategory->title }}
@endsection
@section('description')
{{ $productCategory->description }}
@endsection
@section('keywords')
{{ $productCategory->keywords }}
@endsection
@section('container')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="slug__categories">
                        <h2>Danh mục sản phẩm</h2>
                        @foreach ($categories->where('type',1) as $category)
                            @foreach ($category->childs->sortBy('sort_id') as $category)
                                <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <div class="col-md-8">
                        <h3 class="service__header">
                            {{ $productCategory->name }}
                        </h3>
                        <div class="service__text">
                            {{ $productCategory->text }}
                        </div>
                        <div class="service__font">
                            {!! $themes->icon !!}
                        </div>
                        <hr>
                        <div class="row">
                            @foreach ($productCategory->products as $item)
                                    <div class="col-md-6">
                                        <a href="{{ url($productCategory->slug.'/'.$item->slug) }}" class="news__item">
                                            <div class="news__item--img">
                                                <img class="w-100 h-100" src="{{ asset($item->img) }}" alt="">
                                            </div>
                                            <h3 class="news__item--header">
                                                {{ $item->name }}
                                            </h3>
                                            <div class="news__item--text">
                                                {{ $item->text }}
                                            </div>
                                        </a>
                                    </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>

    </main>
@endsection
