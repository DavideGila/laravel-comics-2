@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-dark">
        <div class="container">
            <span class="text-light bg-primary p-3 fs-3 text-uppercase">Current Series</span>
            <div class="mt-4">
                <form action="{{ route('comics.index') }}" method="GET">
                    <select name="search" id="search">
                        <option value="">Tutti</option>
                        <option value="comic book">Comic book</option>
                        <option value="graphic novel">Graphic novel</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Invio</button>
                </form>
            </div>
            <div class="row">
            @if (session()->has('message'))
                <div class="alert alert-success mt-4">{{ session()->get('message') }}</div>
            @endif
                @foreach ($comics as $comic)
                    <div class="col-2 py-5">
                        <div>
                            <img src="{{ $comic->thumb }}" alt="" class="object-fit-cover series-img">
                            <div>
                                <h6 class="title text-light text-uppercase">{{ $comic->title }}</h6>
                            </div>
                            <span><a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Read More</a></span>
                            <form action="{{route('comics.show', $comic->id)}}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cancel-button btn btn-danger" data-item-title="{{ $comic->title }}">Delete</button>
                            </form>
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

@include('partials.modal_delete')
@endsection
