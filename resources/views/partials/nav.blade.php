<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">GoVice</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        {{--Add spacing between site name and buttons --}}
        <li class="nav-item active">
            <a class="nav-link">       <span class="sr-only">(current)</span></a>
        </li>
        {{--Begin defining navbar buttons --}}
        @if (Route::has('login'))
            @auth
            {{--Home--}}
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            {{--Logout--}}
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('logout') }}">Logout <span class="sr-only">(current)</span></a>
            </li>
            @else
            {{--Login--}}
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
            </li>
            {{--Register--}}
            <li class="nav-item active">
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