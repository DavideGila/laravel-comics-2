@extends('layouts.app')

@section('title', 'Comic Create')

@section('content')
<main class="bg-dark">
    <section class="container py-4">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <input type="text" id="title" name="title" placeholder="Inserisci il titolo" class="form-control my-3">
            <input type="text" id="description" name="description" placeholder="Inserisci la descrizione" class="form-control my-3">
            <input type="text" id="price" name="price" placeholder="Inserisci il prezzo" class="form-control my-3">
            <input type="text" id="type" name="type" placeholder="Inserisci il tipo" class="form-control my-3">
            <input type="text" id="thumb" name="thumb" placeholder="Inserisci l'immagine" class="form-control my-3">
            <input type="text" id="sale_date" name="sale_date" placeholder="Inserisci la data" class="form-control my-3">
            <input type="text" id="series" name="series" placeholder="Inserisci la serie" class="form-control my-3">

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </section>
</main>
@endsection

