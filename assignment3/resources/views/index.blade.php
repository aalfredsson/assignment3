<h1>Alla produkter</h1>
<p>Nedan listas alla produkter upp</p>
@foreach ($products as $product)
    {{ $product->title }}
@endforeach