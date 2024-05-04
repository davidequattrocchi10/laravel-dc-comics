@extends('layouts.app')

@section('title', 'Admin - Single Comic')


@section('content')
<div class="container p-5 my-1 border border-primary text-center">
    <div class="row">
        <div class="col-6">
            <button class="btn btn-primary {{ $comic->id == '1' ? 'disabled': '' }}"> <a class="nav-link" id="prev" href="#" data-current-comic-id="{{ $comic->id }}"> Prev </a> </button>
        </div>
        <div class="col-6">
            <!-- If the next $comic->id don't exist return me page 404 - not found  -->
            <button class="btn btn-primary"> <a class="nav-link" id="next" href="#" data-current-comic-id="{{ $comic->id }}"> Next </a> </button>
        </div>
    </div>


    <div class="card my-3 mx-auto border border-primary" style="max-width: 740px;">
        <div class="row g-0">
            <div class="col-md-6 py-3 px-1">
                <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="{{$comic->title}}">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text"><strong> Price: </strong>{{$comic->price}}</p>
                    <p class="card-text"><small class="text-body-secondary"> <strong>Sale date: </strong> {{$comic->sale_date}} </small></p>
                    <p class="card-text"><small class="text-body-secondary"> <strong>Type: </strong>{{$comic->type}}</small></p>
                    <p class="card-text"><small class="text-body-secondary"> <strong>Series: </strong>{{$comic->series}}</small></p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

</div>
<script>
    const nextPage = document.getElementById("next");
    nextPage.addEventListener("click", function(event) {
        event.preventDefault();
        const currentComicId = parseInt(nextPage.dataset.currentComicId);

        const nextComicId = currentComicId + 1; //Next Comic 
        const nextComicUrl = `{{ route('comics.show', '') }}/${nextComicId}`; //Get url with Template Literals  

        window.location.href = nextComicUrl; // Redirect to the next comic's page
    });

    const prevPage = document.getElementById("prev");
    prevPage.addEventListener("click", function(event) {
        event.preventDefault();
        const currentComicId = parseInt(prevPage.dataset.currentComicId);

        const prevComicId = currentComicId - 1; // Previous Comic
        const prevComicUrl = `{{ route('comics.show', '') }}/${prevComicId}`; //Get url with Template Literals  

        window.location.href = prevComicUrl; // Redirect to the previous comic's page
    });
</script>
@endsection