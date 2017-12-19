@extends('layouts.app')

@section('title' | 'Posts')

@push('stylesheets')
{{ Html::style('css/blog.css') }}
@endpush

@section('content')
<main class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Posts</h1>
        </div>
        @auth
        <div class="col-md-10">
            <a href="{{ route('post.create') }}" class="btn btn-primary btn-lg btn-block">Create Post</a>
        </div>
        @endauth
    </div>
    
    <hr>

    <div class="row">
        @foreach($posts as $post)
        <div class="col-sm-10 blog-main">
            <div class="card bg-light mb-3" style="max-width: 100rem;">
                <div class="card-header">{{ date_format($post->created_at, 'M j, Y') }}</div>
                <div class="card-body">
                    <h1 class="card-title"><a href="{{ route('post.show',$post->id) }}">{{ $post->title }}</a></h1>
                    <p class="card-text text-truncate">{{ $post->body }}</p>
                </div>
            </div>
        </div>        
        @endforeach
    </div>
    <div class="col-sm-8 center-block">
        {!! $posts->links('pagination::bootstrap-4') !!}    
    </div>
</main>
@endsection