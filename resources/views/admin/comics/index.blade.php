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
                    <th scope="col">DELETE</th>
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
                    <td style="vertical-align: middle;"><a href="{{route('comics.show', $comic)}}"> View</a></td>
                    <td style="vertical-align: middle;"><a href="{{route('comics.edit', $comic)}}"> Edit</a></td>
                    <td style="vertical-align: middle;">
                        <!-- Modal trigger button -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalId-{{$comic->id}}">
                            Delete
                        </button>

                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modalId-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{$comic->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId-{{$comic->id}}">
                                            Delete comic with ID {{$comic->id}}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this? The operation cannot be reverted!!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <form action="{{route('comics.destroy', $comic)}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{$comics->links('pagination::bootstrap-5')}}
    </div>
</div>


@endsection