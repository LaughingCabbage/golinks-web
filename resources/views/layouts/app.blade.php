<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@push('stylesheets')
{{ Html::style('css/mod.css') }}
@endpush

@include('partials.head')

<body>
@include('partials.nav')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@yield('content')

@include('partials.script')
</body>
</html>