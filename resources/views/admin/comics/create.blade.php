@extends ('layouts.appAdmin')

@section('title', 'Admin - New Comic')

@section('content')

<h3 class="p-1 bg-primary text-white text-center">ADD A NEW COMIC</h3>

<div class="container py-2 position-relative">
    <div class="position-absolute top-0 end-0">
        <a href="{{route('comics.index')}}"><button type="submit" class="btn btn-primary">Come Back</button></a>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="my-5">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="title" placeholder="Ex. American Vampire" required value="{{old('title')}}" />
                <small id="title" class="form-text text-muted">Insert a new title</small>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="my-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{old('description')}}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label"> Image</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" aria-describedby="image" placeholder="Ex. https://www.panini.it/media/catalog/product/..." required value="{{old('thumb')}}" />
                <small id="image" class="form-text text-muted">Insert path of image</small>
                @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step=".01" class="form-control @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="price" placeholder="Ex. 3.99" required value="{{old('price')}}" />
                <small id="price" class="form-text text-muted">Insert price</small>
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" aria-describedby="series" placeholder="Ex. American Vampire 1976" value="{{old('series')}}" />
                <small id="series" class="form-text text-muted">Insert series</small>
                @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" aria-describedby="saleDate" placeholder="Ex. 2020-10-06" value="{{old('sale_date')}}" />
                <small id="saleDate" class="form-text text-muted">Insert sale date</small>
                @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="type" class="form-label ">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" aria-describedby="type" placeholder="Ex. Comic book" value="{{old('type')}}" />
                <small id="type" class="form-text text-muted">Insert Type</small>
                @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>

    </form>

</div>

@endsection

<!-- <label for="title">Post Title</label>
 
<input id="title"
    type="text"
    name="title"
    class="@error('title') is-invalid @enderror">
 
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror -->