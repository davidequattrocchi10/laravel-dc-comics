@extends('layouts.app')

@section('title', 'Admin - Welcome ')


@section('content')

<h3 class="p-1 bg-primary text-white text-center">COMICS</h3>

<div class="container position-relative pb-2" style="min-height: 65vh;">

    <a class="btn btn-primary rounded-pill position-absolute bottom-0 end-0 m-3" href="{{route('comics.create')}}" role="button">ADD +</a>

    <div class="table-responsive my-5">
        <table class="table table-primary table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">SERIES</th>
                    <th scope="col">SALE DATE</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">VIEW</th>
                    <th scope="col">EDIT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr class="table-primary">
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td><a href="{{route('comics.show', $comic)}}"> View</a></td>
                    <td><a href="{{route('comics.edit', $comic)}}"> Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{$comics->links('pagination::bootstrap-5')}}
    </div>
</div>


@endsection