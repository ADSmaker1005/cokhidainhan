@extends('themes.app')
@section('title')
{{ $themes->title }}
@endsection
@section('description')
{{ $themes->description }}
@endsection
@section('keywords')
{{ $themes->keywords }}
@endsection
@section('container')
<main>
    @if ($banner->count() > 0)
    <section class="indexbanner">
            <div id="Banner" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($banner as $index => $item)
                    <li data-target="#Banner" data-slide-to="{{ $index++ }}" {{ $loop->first ? 'class="active"' : '' }}></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($banner as $item)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <a href="{{ $item->link }}">
                                <img class="d-block w-100" src="{{ $item->images }}" alt="{{ $item->name }}">
                            </a>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#Banner" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#Banner" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
    </section>
    @endif

    <section class="">
        <div class="container">
            <div class="row no-gutters">
                {{-- <div class="col-md-3 slug__categories">
                    <h2>Danh mục</h2>
                    @foreach ($categories->where('type',1) as $category)
                        @foreach ($category->childs->sortBy('sort_id') as $category)
                            <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    @endforeach
                </div> --}}
                <div class="col-md-12">
                    <h3 class="service__header">
                        {{ $themes->aboutheader }}
                    </h3>
                    <div class="service__text">
                        {{$themes->abouttext}}
                    </div>
                    <div class="service__font">
                        {!! $themes->icon !!}
                    </div>
                    <div class="mt-2" class="about__content">
                        {!! $themes->aboutcontent !!}
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="indexbenefit mt-2">
        <div class="container">
            <h3 class="service__header">
                {{ $themes->header2 }}
            </h3>
            <div class="service__text">
                {{$themes->text2}}
            </div>
            <div class="service__font">
                {!! $themes->icon !!}
            </div>
            @foreach ($Menucategories->sortBy('sort_id') as $index => $category)
            @foreach ($category->childs->where('locate','2')->sortBy('sort_id') as $category)
                <div class="container mb-2">
                    <div class="index__product--header">
                        <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}">{{ $category->name }}</a>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="index__product--img">
                                <img src="{{ $category->image }}">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                @foreach ($category->products->take(6) as $item)
                                    <div class="col-md-4">
                                        <a href="{{ url($category->slug.'/'.$item->slug) }}" class="index__product--item">
                                            <div class="index__product--item__img">
                                                <img src="{{ $item->img }}">
                                            </div>
                                            <div class="index__product--item__header">
                                                {{  $item->name }}
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="index__product__btn">
                        <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}">Xem tất cả</a>
                    </div>
                </div>
            @endforeach
        @endforeach
        </div>
    </section>
    <section>
        <div class="container mb-2">
            <div class="index__product--header">
                <a href="#">Video nổi bật</a>
            </div>
            <div class="row">
                @foreach ($categories->where("type","0") as $category)
                    @foreach ($category->posts->where("locate","1") as $item)
                        <div class="col-sm-12 col-md-4 mb-3">
                            <a href="{{ url($category->slug.'/'.$item->slug) }}" class="index__product--item">
                                <div class="index__product--item__img" style="height: 200px">
                                    {!! $item->content !!}
                                </div>
                                <div class="index__product--item__header">
                                    {{  $item->name }}
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
                
            </div>
            <div class="index__product__btn">
                <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}">Xem tất cả</a>
            </div>
        </div>
    </section>
    {{-- <section class="about mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about__col2">
                        {!! $themes->aboutmedia !!}
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="about__col1">
                        <div class="about__col1--header">
                            {{ $themes->aboutheader2 }}
                        </div>
                        <div class="about__col1--text">
                            {{ $themes->abouttext2 }}
                        </div>
                        <div class="about__col1--icon">
                            {!! $themes->icon !!}
                        </div>
                        <div class="media__col2--content">
                            {!! $themes->aboutcontent2 !!}
                        </div>
                        <div class="media__btn">
                            <a href="{{ url($themes->abouturl2) }}">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="news" style="background-image: url('{{ $themes->backgroundnews }}');">
        <div class="container">
            <h3 class="news__header">
                {{ $themes->header3 }}
            </h3>
            <div class="service__text">
                {{$themes->text3}}
            </div>
            <div class="service__font">
                {!! $themes->icon !!}
            </div>
            <div class="row">
                @foreach ($categories->where('locate',4)->where('type',0) as $category)
                    <div class="col-md-4">
                        <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}" class="news__item">
                            <div class="news__item--img">
                                <img class="w-100 h-100" src="{{ $category->image }}" alt="">
                            </div>
                            <div class="news__item--date">
                                <span>{{ Carbon\Carbon::parse($category->created_at)->format('d.m.Y') }}</span>
                            </div>
                            <h3 class="news__item--header">
                                {{ $category->name }}
                            </h3>
                            <div class="news__item--text">
                                {{ $category->text }}
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="service">
        <div class="container">
            <h3 class="service__header">
                {{ $themes->header1 }}
            </h3>
            <div class="service__text">
               {{ $themes->text1 }}
            </div>
            <div class="service__font">
            {!! $themes->icon !!}
            </div>
            <div class="row">
                @foreach ($categories->where('locate',1)->where('type',0) as $category)
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}" class="service__item">
                            <div class="service__item--icon">
                               {!! $category->icon !!}
                            </div>
                            <div class="service__item--header">
                               {{$category->name}}
                            </div>
                            <div class="service__item--text">
                                {{$category->text}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="maps">
        {!! $themes->map !!}
    </section>
</main>
@endsection

