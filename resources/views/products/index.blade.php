@extends ('../layouts/app')

@section('custom_css')
    <link rel="stylesheet" href="{{ asset("css/allproducts.css") }}">
@endsection

@section('title')
    Все товары
@endsection

@section('content')
    <h1>Все товары</h1>
    <div class="wrapper">
    @foreach($products as $el)
        @php
            $image = "";
            if(count($el->images) > 0) {
                $image = $el->images[0]['img'];
            }
            else {
                $image = 'no_image.png';
            }
        @endphp
            <a href="/products/{{ $el->id }}">
                <div class="card">
                    <img src="/img/{{ $image }}" alt="{{ $el->title }}">
                    <h3>{{ $el->title }}</h3>
                    <span>Цена: {{ $el->price }} грн.</span>
                </div>
            </a>
    @endforeach
        </div>
@endsection
