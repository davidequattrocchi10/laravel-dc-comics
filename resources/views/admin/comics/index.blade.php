@extends('layouts.app')

@section('title', 'Welcome admin')


@section('content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-6">
            <div class="card">
                <div class="card-title">
                    <h2>{{$comic->title}}</h2>
                    <img src="{{$comic->thumb}}" alt="Comic Image" style="width:100%;">
                </div>
                <div class="card-body">
                    <p>{{$comic->description}}</p>
                    <p>{{$comic->price}}</p>
                    <p>{{$comic->sale_date}}</p>
                    <p>{{$comic->type}}</p>
                    <p>{{$comic->series}}</p>
                </div>
                <a href="{{route('comics.show', $comic)}}"> View Comic</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection