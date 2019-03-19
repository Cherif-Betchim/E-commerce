<aside>
    <p>
        <a href="{{ route('frontProductIndex', ['sort' => 'name']) }}" class="btn btn-secondary">Tri par nom</a>
    </p>
    <p>
        <a href="{{ route('frontProductIndex', ['sort' => 'price']) }}" class="btn btn-secondary">Tri par prix croissant</a>
    </p>
    <p>
        <a href="{{ route('frontProductIndex') }}">Ne pas trier</a>
    </p>
</aside>