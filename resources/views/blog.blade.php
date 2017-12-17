@extends('layouts.app')

@section('title' | 'Blog')

@push('stylesheets')
{{ Html::style('css/blog.css') }}
@endpush

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>Posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('post.create') }}" class="btn btn-lg btn-block btn-primary">Create Post</a>
        </div>
    </div>
@endsection