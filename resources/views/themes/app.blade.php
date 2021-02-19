<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv=”content-language” content=”vi” />
    <title>@yield('title')</title>
    <meta name=”robots” content=”noodp,index,follow” />
    <link rel="icon" type="image/png" href="{{ $themes->favicon }}"/>
    <meta name=’revisit-after’ content=’1 days’ />
    <meta http-equiv = "Content-Type" content = "text / html; charset = utf-8" />
    <meta name="description" content="@yield('description'){{ $themes->description }}"/>
    <meta name="keywords" content="@yield('keywords'){{ $themes->keywords }}"/>
    <link rel="canonical" href="{{ url()->current() }}" />
    <script src="https://kit.fontawesome.com/d3be5a5fe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu-mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/call-zalo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reponsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script>
        {!! $themes->css !!}
    </script>
</head>
<body>
    <div style="position: fixed;right:0;top:0;width:0;height:0">
        {!! $themes->headtag !!}
    </div>
    <header class="header">
        @include('themes.partials.header')
        @include('themes.partials.header-mobile')
    </header>
    @yield('container')
    @include('themes.partials.footer')
    @include('themes.partials.call')
    @include('admin.error')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/d3be5a5fe5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
{!! $themes->schema !!}
</html>
