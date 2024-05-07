<header class="container-fluid text-center bg-white py-2">
    <div class="row align-items-center">
        <div class="col">
            <img src="/images/dc-logo.png" alt="" style="width:20%;">
        </div>
        <div class="col-6">
            <div class="nav justify-content-center">
                <a class="nav-link {{Route::currentRouteName() === 'welcome' ? 'bg-primary text-white ' : 'border border-primary'}}" href="{{route('welcome')}}" style="width:33.3%;">Welcome</a>
                <a class="nav-link {{Route::currentRouteName() === 'signUp' ? 'bg-primary text-white ' : 'border border-primary'}}" href="{{route('signUp')}}" style="width:33.3%;"> Sign Up</a>
                <a class="nav-link {{Route::currentRouteName() === 'allComics' ? 'bg-primary text-white ' : 'border border-primary'}}" href="{{route('allComics')}}" style="width:33.3%;"> Comics</a>
            </div>
        </div>
        <div class="col">
            <form class="d-flex p-2" role="search">
                <input class="form-control ms-5 me-1" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary px-1" type="submit">&#128270;</button>
            </form>
        </div>
    </div>
</header>