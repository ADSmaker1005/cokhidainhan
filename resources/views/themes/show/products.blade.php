@extends('themes.app')
@section('title')
{{ $products->title }}
@endsection
@section('description')
{{ $products->description }}
@endsection
@section('keywords')
{{ $products->keywords }}
@endsection
@section('container')
<main>
    <div class="container">
        <div class="index--service--head">
            <h3 class="service__header">
                {{ $products->name }}
            </h3>
            <div class="service__text">
                {{ $products->text }}
            </div>
            <div class="service__font">
                {!! $themes->icon !!}
            </div>
            <hr>
        </div>
        <div class="mt-2 p-2">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-md-4">
                        <img class="w-100" src="{{ asset($products->img) }}">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-striped">
                            <tbody>
                                @for ($i = 1; $i <= min([count(unserialize ($products->infoname)),count(unserialize ($products->infotext))]); $i++)
                                    <tr>
                                        <th scope="row">{{ $i }}</th>
                                        <td>{{ (unserialize($products->infoname)[$i-1]) }}</td>
                                        <td>{{ (unserialize($products->infotext)[$i-1]) }}</td>
                                    </tr>
                                @endfor
                            </tbody>
                          </table>
                    </div>
                </div>
                <div>
                    {!! $products->content !!}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
