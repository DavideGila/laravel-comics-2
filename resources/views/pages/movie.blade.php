@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-dark">
        <div class="container">
            <span class="text-light bg-primary p-3 fs-3 text-uppercase">Current Series</span>
            <div class="row">
                @foreach ($product as $el)
                <div class="col-2 py-5">
                    <div>
                        <img src="{{$el['thumb']}}" alt="" class="object-fit-cover series-img">
                        <div>
                            <h6 class="title text-light text-uppercase">{{$el['title']}}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center pb-3">
                <button class="btn btn-primary">LOAD MORE</button>
            </div>
        </div>
    </div>
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
