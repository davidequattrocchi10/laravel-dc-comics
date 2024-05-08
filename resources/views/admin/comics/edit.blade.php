@extends ('layouts.app')

@section('title', 'Admin - Edit Comic')

@section('content')

<h3 class="p-1 bg-primary text-white text-center">Edit property</h3>

<div class="container py-2 position-relative">
    <div class="position-absolute top-0 end-0">
        <a href="{{route('comics.index')}}"><button type="submit" class="btn btn-primary">Come Back</button></a>
    </div>

    <form action="{{route('comics.update', $comic)}}" method="post">
        @csrf
        @method('PUT')

        <div class="my-5">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="title" placeholder="Ex. American Vampire" value="{{$comic->title}}" required />
                <small id="title" class="form-text text-muted">Insert a new title</small>
            </div>

            <div class="my-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{$comic->description}}</textarea>
            </div>

            <div class="d-flex gap-3 my-4">
                <img width="200px;" class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <div class="my-auto w-100 ">
                    <label for="thumb" class="form-label"> Image</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="image" placeholder="Ex. https://www.panini.it/media/catalog/product/..." value="{{$comic->thumb}}" required />
                    <small id="image" class="form-text text-muted">Insert path of image</small>
                </div>
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step=".01" class="form-control" name="price" id="price" aria-describedby="price" placeholder="Ex. 3.99" value="{{$comic->price}}" required />
                <small id="price" class="form-text text-muted">Insert price</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="series" placeholder="Ex. American Vampire 1976" value="{{$comic->series}}" />
                <small id="series" class="form-text text-muted">Insert series</small>
            </div>


            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="saleDate" placeholder="Ex. 2020-10-06" value="{{$comic->sale_date}}" />
                <small id="saleDate" class="form-text text-muted">Insert sale date</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label ">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="type" placeholder="Ex. Comic book" value="{{$comic->type}}" />
                <small id="type" class="form-text text-muted">Insert Type</small>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>

</div>

@endsection