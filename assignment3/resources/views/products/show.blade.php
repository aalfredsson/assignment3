@extends("products.layout")

@section("content")

<h1>{{ $product->title }}</h1>
<p><strong>Pris:</strong> {{ $product->price }}</p>
<img src="{{ $product->image }}" alt="{{ $product->title }}" style="max-width: 300px">

@endsection