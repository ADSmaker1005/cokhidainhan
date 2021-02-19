<!-- MENU Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <x-jet-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                        <i class="dripicons-device-desktop"></i>{{ __('Dashboard') }}
                    </x-jet-nav-link>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="dripicons-suitcase"></i>Hệ thống <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="{{ route('admin.themes.index') }}">Giao diện</a></li>
                                <li><a href="{{ route('admin.footer.index') }}">Footer</a></li>
                                <li><a href="{{ route('admin.banner.index') }}">Banner</a></li>
                                <li><a href="{{ route('admin.filemanager.index') }}">Thư viện &amp; Hình ảnh</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="dripicons-suitcase"></i>Danh mục <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="{{ route('admin.categories.index') }}">Danh sách</a></li>
                                <li><a href="{{ route('admin.categories.sort.index') }}">Sắp xếp</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="dripicons-suitcase"></i>Bài viết <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="{{ route('admin.posts.index') }}">Danh sách</a></li>
                                <li><a href="{{ route('admin.posts.create') }}">Tạo bài viết</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="dripicons-suitcase"></i>Khách hàng<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="{{ route('admin.form.index') }}">Danh sách</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="mdi mdi-archive"></i>Sản phẩm <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="{{ route('admin.products.index') }}">Danh sách</a></li>
                                <li><a href="{{ route('admin.products.create') }}">Tạo sản phẩm</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End navigation menu -->
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div> <!-- end navbar-custom -->
