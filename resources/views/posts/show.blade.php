@extends('layouts.app')

@section('title', '| View Post')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }} </p>
        </div>
    </div>
</div>
@endsection