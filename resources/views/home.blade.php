@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-primary d-flex py-4">
        <div class="container d-flex justify-content-between align-items-center p-3">
            @foreach ($content as $el)
            <img src="{{$el['img']}}" alt="" class="blue-bar-image">
            <span class="p-2 text-uppercase text-light">{{ $el['text'] }}</span>
            @endforeach
        </div>
    </div>
</main>

@endsection
