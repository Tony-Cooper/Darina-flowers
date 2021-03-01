@extends ('../layouts/app')

@section('custom_css')
    <link rel="stylesheet" href="{{ asset("css/allproducts.css") }}">
@endsection

@php
    $title = '';

    $title = (isset($category_title)) ? $category_title : 'Все товары';
@endphp

@section('title')
    Darina flowers - {{ $title }}
@endsection

@section('content')
    <h1>{{ $title }}</h1>
    <div class="wrapper">
        <div class="sort-by">
            <button class="sort-button" data-order-by="price-low-high">От дешёвых к дорогим</button>
            <button class="sort-button" data-order-by="price-high-low">От дорогих к дешёвым</button>
            <button class="sort-button" data-order-by="name-A-Z">По имени А-Я</button>
            <button class="sort-button" data-order-by="name-Z-A">По имени Я-А</button>
        </div>
        <div class="dynamic-ajax">
            <div class="product-list">
                @foreach($products as $product)
                    @php
                        $image = "";
                        if(count($product->images) > 0) {
                            $image = $product->images[0]['img'];
                        }
                        else {
                            $image = 'no_image.png';
                        }
                    @endphp
                        <a href="/products/{{ $product->id }}">
                            <div class="card">
                                <img src="/img/{{ $image }}" alt="{{ $product->title }}">
                                <h3>{{ $product->title }}</h3>
                                <span>Цена: {{ $product->price }} грн.</span>
                            </div>
                        </a>
                @endforeach
            </div>
            {{ $products->appends(request()->query())->links() }}
        </div>
    </div>
    @php
        if(isset($category->alias)) {
            $url = route('showCategory', $category->alias);
        } else {
            $url = route('products.index');
        }
    @endphp
@endsection

@section('custom_js')
    <script>
        $(document).ready( function() {
            $('.sort-button').click(function() {
                let orderBy = $(this).data('order-by');
                $.ajax({
                    url: "{{ $url }}",
                    type: "GET",
                    data: {
                        orderBy: orderBy,
                        page: {{ isset($_GET['page']) ? $_GET['page'] : 1 }}
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (data) => {

                        let pos = location.pathname.indexOf('?');
                        let url = location.pathname.substring(pos, location.pathname.length);
                        let newURL = url + '?';
                        newURL += 'orderBy=' + orderBy + '&page=' + {{ isset($_GET['page']) ? $_GET['page'] : 1 }};
                        history.pushState({}, '', newURL);

                        $('.dynamic-ajax').html(data);
                    }
                });
            });
        });

    </script>
@endsection
