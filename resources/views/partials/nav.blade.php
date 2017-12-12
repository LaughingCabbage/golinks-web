<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">GoVice</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"> {{--Add spacing between site name and buttons --}}
                <a class="nav-link"><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">{{--Home--}}
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            @if (Route::has('login')) {{--Begin defining navbar buttons --}}
            @auth
            <li class="nav-item active"> {{--Logout--}}
                <a class="nav-link" href="{{ route('logout') }}">Logout <span class="sr-only">(current)</span></a>
            </li>
            @else
            <li class="nav-item active"> {{--Login--}}
                <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"> {{--Register--}}
                <a class="nav-link" href="{{ route('register') }}">Register <span class="sr-only">(current)</span></a>
            </li>
            @endauth
            @endif
            
        </ul>
        {{-- Remove search bar for now
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        --}}
    </div>
</nav>