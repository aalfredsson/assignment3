@extends("products.layout")

@section("content")

<div>
    <div style="max-width: 600px; float: left;">
        <h1>{{ $product->title }}</h1>
        <p><strong>Pris:</strong> {{ $product->price }}</p>
        <p>{{ $product->description }}</p>
    </div>
    <img src="{{ $product->image }}" alt="{{ $product->title }}" style="max-width: 300px; float: left;">
</div>

@endsection