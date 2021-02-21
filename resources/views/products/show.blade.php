@extends ('../layouts/app')

@section('custom_css')
    <link rel="stylesheet" href="{{ asset("css/productshow.css") }}">
@endsection

@section('title')
    Просмотр товара
@endsection

@section('content')
    <div class="wrapper">
        <h3>Цветок {{ $product->title }}</h3>
            @if(count($product->images) > 0)
                @foreach ($product->images as $image)
                <img src="/img/{{ $image['img'] }}" alt="{{ $image->id }}">
                @endforeach
                @else
                <img src="/img/no_image.png" alt="no image">
            @endif
        <ul class="description">
            <li>Цена: {{ $product->price }}</li>
            <li>Вид: {{ $product->type }}</li>
            <li>Цвет: {{ $product->color }}</li>
            <li>Высота: {{ $product->height }}</li>
            <li>Производитель: {{ $product->manufacturer }}</li>
        </ul>
        <p>Описание продукта: {{ $product->description }}</p>
    </div>
@endsection
