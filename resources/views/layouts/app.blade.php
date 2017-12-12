<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials.head')
    
<body>
@include('partials.nav')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@yield('content')

@include('partials.footer')
</body>
</html>