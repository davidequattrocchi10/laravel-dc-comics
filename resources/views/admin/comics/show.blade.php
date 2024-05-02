@extends('layouts.app')

@section('title', 'Single Comic admin')


@section('content')
<div class="container">
    <div class="row">
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
            </div>
        </div>
    </div>
</div>
@endsection