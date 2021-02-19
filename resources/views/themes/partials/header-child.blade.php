<ul class="header__nav__item--submenu2">
    @if($category->childs->count() > 0)
        @foreach ($category->childs->sortBy('sort_id') as $category)
            <li>
                <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}">
                    {{ $category->name }}
                </a>
                @include('themes.partials.header-child',['category'=>$category])
            </li>
        @endforeach
    @endif
</ul>
