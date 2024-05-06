@extends('layouts.app')


@section('title', 'Comics')

@section('content')
<div class="container">

    <div class="me-3 mb-5 d-flex justify-content-end">
        <select name="type" id="type" class="p-2 text-primary rounded border border-primary">
            <option selected>All types</option>
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>
    </div>
    <div class="row justify-content-center">
        @foreach ($comics as $comic)
        <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{$comic->thumb}}" alt="Comic Image" style="object-fit: cover; height:55%;">
                <div class="card-body">
                    <p class="mb-1 font-monospace fw-bolder fs-6" style="height:16%;">{{$comic->title}}</p>
                    <p class="mb-1" style="height:22%;"> {{Str::limit($comic->description, 100)}} </p>
                    <p class="mb-1" style="height:10%;">Price: ${{$comic->price}}</p>
                    <p class="mb-1" style="height:10%;">Sale date: {{$comic->sale_date}}</p>
                    <p class="mb-1" style="height:10%;" data-types="{{$comic->type}}">Type: {{$comic->type}}</p>
                    <p class="mb-1" style="height:15%;">Series: {{$comic->series}}</p>
                    <a href="{{route('comics.show', $comic)}}" class="btn btn-primary" style="height:11%;"> View Comic</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>


<script>
    // Select element and apply the event listener
    const selectFilter = document.getElementById("type");
    selectFilter.addEventListener("change", filterComics);

    /**
     * Filters comic cards based on the selected type.
     *
     * @param {Event} event The event object triggered by the change in the select element.
     *
     * @returns {void} nothing is returned, but the function modifies the display styles of comic card elements
     */
    function filterComics(event) {
        const selectedType = event.target.value;
        // console.log(selectedType);
        const comicCards = document.querySelectorAll(".col-md-6.col-lg-4.col-xl-3.mb-4");
        comicCards.forEach(comicCard => {
            const comicTypeElement = comicCard.querySelector(".card-body p:nth-child(5)"); //type is displayed in the 5th paragraph
            const comicType = comicTypeElement.dataset.types;
            console.log(comicType);
            if (selectedType === "All types" || comicType === selectedType) {
                comicCard.style.display = "block"; // Show card if matches filter
            } else {
                comicCard.style.display = "none"; // Hide card if doesn't match filter
            }
        });
    }
</script>

@endsection