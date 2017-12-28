 <div class="container">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-gradient-primary">
        <a class="navbar-brand" href="/">GoVice</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item active"> {{--Add spacing between site name and buttons --}}
                    <a class="nav-link"><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">{{--Home--}}
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">{{--Blog--}}
                    <a class="nav-link" href="/blog">Blog <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @auth
                <li class="nav-item active dropdown"> {{--Dropdown--}}
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('portal') }}">Portal</a> {{--Portal--}}
                        <a class="dropdown-item" href="{{ route('admin') }}">Admin Panel</a> {{--Admin--}}
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a> {{--Logout--}}
                    </div>
                </li>
                @endauth
                
                @guest
                <li class="nav-item active"> {{--Login--}}
                    <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active"> {{--Register--}}
                    <a class="nav-link" href="{{ route('register') }}">Register <span class="sr-only">(current)</span></a>
                </li>
                @endguest
            </ul>
            {{-- Remove search bar for now
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            --}}
        </div>
    </nav>
</div>