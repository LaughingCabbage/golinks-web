@extends('layouts.app')

@section('title' | 'Blog')

@push('stylesheets')
{{ Html::style('css/blog.css') }}
@endpush

@section('content')
<main role="main" class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('post.create') }}" class="btn btn-lg btn-block btn-primary">Create Post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <a href="{{ route('post.show',$post->id) }}">{{ $post->title }}</a>
                <p class="text-truncate">{{ $post->body }} </p>
            </div>
        </div>        
        @endforeach
    </div>
</main>
@endsection