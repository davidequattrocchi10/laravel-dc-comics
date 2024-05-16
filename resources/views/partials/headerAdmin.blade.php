<header class="container text-center bg-white py-2">
    <div class="d-flex justify-content-around align-items-center">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvas" aria-controls="offCanvas">
            <i class="fa-solid fa-bars"></i>
        </button>
        <h3 class="text-primary my-auto"> Admin</h3>
        <img src="/images/dc-logo.png" alt="Logo" style="width:50px">
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offCanvas" aria-labelledby="offCanvasLabel">
        <div class="offcanvas-body">
            <ul class="list-group">
                <li class="list-group-item {{Route::currentRouteName() === 'comics.index' ? 'active' : ''}}"><a class="nav-link" href="{{route('comics.index')}}"> Home Admin</a></li>
                <li class="list-group-item {{Route::currentRouteName() === 'comics.create' ? 'active' : ''}}"><a class="nav-link" href="{{route('comics.create')}}"> Create Comic</a></li>
                <li class="list-group-item {{Route::currentRouteName() === 'welcome' ? 'active' : ''}}"><a class="nav-link" href="{{route('welcome')}}"> Welcome User</a></li>
                <li class="list-group-item {{Route::currentRouteName() === 'allComics' ? 'active' : ''}}"><a class="nav-link" href="{{route('allComics')}}"> Comics User</a></li>
            </ul>
        </div>
    </div>
</header>