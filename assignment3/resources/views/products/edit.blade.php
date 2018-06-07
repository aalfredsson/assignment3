@extends("products.layout")

@section("content")

<h1>Redigera: {{ $product->title }}</h1>

<form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="price">Pris</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="form-group">
        <label for="brand">Märke</label>
        <input type="text" class="form-control" id="brand" name="brand">
    </div>
    <div class="form-group">
        <label for="description">Beskrivning</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="form-group">
        <label for="image">Länk till bild</label>
        <input type="text" class="form-control" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-success">Uppdatera film</button>
</form>

@endsection