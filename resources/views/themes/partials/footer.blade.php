<footer class="footer pl-2 pr-2" style="background-image: url('{{ $themes->banner }}');">
    <div class="row">
        <div class="col-md-5">
            <div class="footer--header">
                <span>
                    {{ $footer->header1 }}
                </span>
                <div class="footer--content">{!! $footer->content1 !!}</div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="footer--header">
                <span>
                    {{ $footer->header2 }}
                </span>
            </div>
            <div class="footer--content">
                <ul class="footer--content__categories">
                    @foreach ($FooterCategories->where('type',0) as $category)
                        @foreach ($category->childs->sortBy('sort_id') as $category)
                            <li>
                                <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-2">
            <div class="footer--header">
                <span>
                     sản phẩm
                </span>
            </div>
            <div class="footer--content">
                <ul class="footer--content__categories">
                    @foreach ($FooterCategories->where('type',1) as $category)
                        @foreach ($category->childs->sortBy('sort_id') as $category)
                            <li>
                                <a href="{{ url($category->slug.'?type='.$category->type.'&locate='.$category->locate) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="footer--header">
                <span>
                    {{ $footer->header3 }}
                </span>
            </div>
            <div class="footer--content">{!! $footer->content2 !!}</div>
        </div>
    </div>
</footer>
