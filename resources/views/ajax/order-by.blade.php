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

