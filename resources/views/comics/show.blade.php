@extends('layouts.app')

@section('title', 'Fumetto')

@section('content')
<main class="bg-dark">
    <section class="container py-4">
        <h1 class="text-white">{{$comic->title}}</h1>
        <div class="row gy-4">
            <div class="col-12 w-50">
                <div class="card">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{{$comic->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
