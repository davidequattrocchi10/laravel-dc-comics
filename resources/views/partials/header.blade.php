<header class="border">
    <nav class="nav justify-content-center">
        <a class="nav-link {{Route::currentRouteName() === 'welcome' ? 'bg-primary text-white' : ''}}" href="{{route('welcome')}}">Welcome</a>
        <a class="nav-link {{Route::currentRouteName() === 'signUp' ? 'bg-primary text-white' : ''}}" href="{{route('signUp')}}"> Sign Up</a>
        <a class="nav-link {{Route::currentRouteName() === 'comic' ? 'bg-primary text-white' : ''}}" href="{{route('comic')}}"> Comics</a>
        </div>
</header>