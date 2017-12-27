@extends('layouts.app')

@section('content')

@push('stylesheets')
{{ Html::style('css/home.css') }}
@endpush

<div class="card bg-dark text-black">
        <img class="card-img" src="{{asset('img/index-bg.jpg')}}" alt="Card image">
        <div class="card-img-overlay text-center">
          <h1 class="card-title">Card title</h1>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">Last updated 3 mins ago</p>
          <i class="fa fa-camera-retro fa-lg"></i> fa-lg
        </div>
    </div>

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-3">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>
@endsection