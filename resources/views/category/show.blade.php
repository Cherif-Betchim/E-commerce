<h1>{{ $category->name }}</h1>
@foreach($products as $product)
    {{ $product->name }}<br>
@endforeach