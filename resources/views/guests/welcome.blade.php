@extends('layouts.app')

@section('title', 'Welcome User')


@section('content')

<div style="height:300px; overflow: hidden;">
    <img src="/images/jumbotron.jpg" alt="" style="height:100%; width: 100%; object-fit: cover; object-position: 100% 0%;">
</div>

<div class="container">
    <div class="row">
        <h1>Title</h1>
        <p>comics comics comics comics</p>
        <p>comics comics comics comics</p>
        <p>comics comics comics comics</p>
    </div>
</div>




<div class="container my-3 ">
    <div id="comicsCarousel" class="carousel slide py-3" data-bs-ride="carousel" style="opacity:1;">
        <div class="carousel-inner">
            @foreach ($comics as $comic)
            <div class="carousel-item {{ $comic->id === 1 ? 'active' : '' }}">
                <div class="row w-60 mx-auto">
                    <img src="{{$comic->thumb}}" class="d-block rounded mx-auto" style="width: 400px; height:300px; opacity:1;" alt="{{$comic->title}}">
                    <h5 class="text-center mt-2 text-primary border-bottom border-primary">{{$comic->title}}</h5>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#comicsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#comicsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

@endsection