 <div class="container">
    <nav class="navbar navbar-expand-sm py-0 fixed-top navbar-dark bg-gradient-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">
            <div class="nav-link">GoVice <i class="fa fa-space-shuttle" aria-hidden="true"></i></div>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item active"> {{--Add spacing between site name and buttons --}}
                    <a class="nav-link"><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">{{--Home--}}
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">{{--Mission--}}
                    <a class="nav-link" href="/mission">Mission</a>
                </li>
                <li class="nav-item">{{--Blog--}}
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @auth
                <li class="nav-item dropdown"> {{--Dropdown--}}
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
        </div>
    </nav>
</div>
