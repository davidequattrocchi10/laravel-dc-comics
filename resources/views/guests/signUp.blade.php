@extends('layouts.app')

@section('title', 'Sign up')


@section('content')

<div class="container-fluid bg-primary mb-2" style="height:20px;"></div>
<div class="container py-4">
    <form class="row border border-primary border-5 g-3 py-4" method="#" action="#">
        @csrf
        <div class="col-md-6">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Paolo">
        </div>
        <div class="col-md-6">
            <label for="inputLastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="inputLastname" placeholder="Rossi">
        </div>
        <div class="col-12">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="@example.com">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Apartment or floor">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" type="text" class="form-control" id="inputCity" placeholder="Barcellona P.G.">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <input type="text" id="inputState" class="form-select" placeholder="Italy">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip" placeholder="98051">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
    </form>
</div>


@endsection