<div>
    @foreach ($products as $product)
        <article>
            <div>
                <img src="{{ asset('img/products/' . $product->id ) }}.jpg" alt="{{ $product->name }}"/>
            </div>
            <div>
                <h3>
                    <a href="{{ route('frontProductShow', ['product' => $product]) }}">{{ $product->name }}</a>
                </h3>
                <p>
                    {{ $product->description }}
                </p>
                <div>
                    {{ $product->price / 100 }} €
                    <a href="{{ route('productAddToCart', ['id' => $product->id]) }}" class="btn" role="button">Ajouter au panier</a>
                </div>
            </div>
        </article>
    @endforeach
</div>