<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@push('stylesheets')
{{ Html::style('css/mod.css') }}
@endpush

@include('partials.head')

<body class="bg-secondary">
@include('partials.nav')

@include('partials.message')

@yield('content')
@include('partials.footer')
@include('partials.script')
</body>

</html>