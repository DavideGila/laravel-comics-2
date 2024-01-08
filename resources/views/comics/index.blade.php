@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-dark">
        <div class="container">
            <span class="text-light bg-primary p-3 fs-3 text-uppercase">Current Series</span>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2 py-5">
                        <div>
                            <img src="{{ $comic->thumb }}" alt="" class="object-fit-cover series-img">
                            <div>
                                <h6 class="title text-light text-uppercase">{{ $comic->title }}</h6>
                            </div>
                            <div><a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Read More</a></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center pb-3">
                <button class="btn btn-primary">LOAD MORE</button>
            </div>
            <div class="text-center pb-3">
                <button class="btn btn-primary"><a href="{{route('comics.create')}}" class="text-white">CREATE</a></button>
            </div>
        </div>
    </div>
</main>
@endsection
