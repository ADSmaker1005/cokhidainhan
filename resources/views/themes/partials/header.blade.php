<div class=header>
    <div class="ml-3 mr-3">
        <div class="row">
            <div class="col-md-4">
                <a href="/" class="header__logo">
                    <img class="block w-100 h-100" src="{{ $themes->logo }}">
                </a>
            </div>
            <div class="col-md-12">
                <ul class="header__nav">
                    @foreach ($Menucategories->sortBy('sort_id') as $index => $category)
                        <li class="header__nav__item">
                            <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}">
                                {{ $category->name }}
                                @if($category->childs->count() > 0)
                                    <i class="fas fa-chevron-down"></i>
                                @endif
                            </a>
                            <ul class="header__nav__item--submenu">
                                @foreach ($category->childs->sortBy('sort_id') as $category)
                                    <li>
                                        <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}">{{ $category->name }}</a>
                                        @include('themes.partials.header-child',['category'=> $category])
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
