@extends('layouts.app')

@section('title', 'Comic Edit')

@section('content')
<main class="bg-dark">
    <section class="container py-4">
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" id="title" name="title" placeholder="Inserisci il titolo" class="form-control my-3" value="{{old('title', $comic->title)}}">
            <input type="text" id="description" name="description" placeholder="Inserisci la descrizione" class="form-control my-3" value="{{old('description', $comic->description)}}">
            <input type="text" id="price" name="price" placeholder="Inserisci il prezzo" class="form-control my-3" value="{{old('price', $comic->price)}}">
            <input type="text" id="type" name="type" placeholder="Inserisci il tipo" class="form-control my-3" value="{{old('type', $comic->type)}}">
            <input type="text" id="thumb" name="thumb" placeholder="Inserisci l'immagine" class="form-control my-3" value="{{old('thumb', $comic->thumb)}}">
            <input type="text" id="sale_date" name="sale_date" placeholder="Inserisci la data" class="form-control my-3" value="{{old('sale_date', $comic->sale_date)}}">
            <input type="text" id="series" name="series" placeholder="Inserisci la serie" class="form-control my-3" value="{{old('series', $comic->series)}}">

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </section>
</main>
@endsection

