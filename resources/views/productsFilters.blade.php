<div class="container filter">
    <a href="{{ route('frontProductIndex', ['sort' => 'name']) }}" class="home-btn">Tri par nom</a>
    <a href="{{ route('frontProductIndex', ['sort' => 'price']) }}" class="home-btn">Tri par prix croissant</a>
    <a href="{{ route('frontProductIndex') }}" class="home-btn setback">Ne pas trier</a>
</div>