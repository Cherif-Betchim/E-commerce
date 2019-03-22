<div class="container products">
    <div class="row">
        @foreach ($products as $product)
            <article class="product col-lg-4">
                <a href="{{ route('frontProductShow', ['product' => $product]) }}">
                    <img src="{{ asset('img/home/product.png' ) }}" alt="{{ $product->name }}"/>
                </a>
                <div>
                    <h3 class="title-3">{{ $product->name }}</h3>
                    <p>
                        {{ Str::limit($product->description, 60, '...') }}
                    </p>
                    <p>
                        Prix : <span class="color bold">{{ $product->price / 100 }} €</span>
                    </p>
                    <a href="{{ route('productAddToCart', ['id' => $product->id]) }}" class="cart-btn" role="button">Ajouter au panier</a>
                </div>
            </article>
        @endforeach
    </div>
</div>