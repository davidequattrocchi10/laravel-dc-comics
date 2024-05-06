@extends('layouts.app')

@section('title', 'Welcome User')


@section('content')

<div style="height:300px; overflow: hidden;">
    <img src="/images/jumbotron.jpg" alt="" style="height:100%; width: 100%; object-fit: cover; object-position: 100% 0%;">
</div>

<div class="container-fluid bg-primary position-relative">
    <button type="button" class="border border-light btn btn-primary btn-lg position-absolute top-0 start-0 translate-middle" style="margin-left:150px;">CURRENT SERIES</button>
    <div class="row p-5 justify-content-center">
        @foreach ($comics as $comic)
        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="polaroid">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}" style="width:100%; height:80%;">
                <div class="polaroid-text">
                    <div>{{$comic->title}}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-outline-light position-absolute bottom-0 start-50 translate-middle-x" style="margin-bottom:20px;">LOAD MORE</button>
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


<div class="container-fluid text-center bg-primary text-white py-3">
    <div class="row justify-content-center align-items-center">
        <div class="col-2 mx-2">
            <img src="/images/buy-comics-digital-comics.png" alt="" style="max-width:20%; height:50px;">
            <span style="font-size:smaller;"> DIGITAL COMICS</span>
        </div>
        <div class="col-2 mx-2">
            <img src="/images/buy-comics-merchandise.png" alt="" style="max-width:20%; height:50px;">
            <span style="font-size:smaller;"> DC MERCHANDISE </span>
        </div>
        <div class="col-2 mx-2">
            <img src="/images/buy-comics-subscriptions.png" alt="" style="max-width:20%; height:50px;">
            <span style="font-size:smaller;"> SUBSCRIPTION</span>
        </div>
        <div class="col-2 mx-2">
            <img src="/images/buy-comics-shop-locator.png" alt="" style="max-width:20%; height:50px;">
            <span style="font-size:smaller;">COMIC SHOP LOCATOR</span>
        </div>
        <div class="col-2 mx-2">
            <img src="/images/buy-dc-power-visa.svg" alt="" style="max-width:20%; height:50px;">
            <span style="font-size:smaller;"> DC POWER VISA</span>
        </div>
    </div>
</div>

@endsection