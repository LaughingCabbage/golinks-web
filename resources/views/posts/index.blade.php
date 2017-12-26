@extends('layouts.app')

@section('title' | 'All Posts')

@push('stylesheets')
{{ Html::style('css/blog.css') }}
@endpush

@section('content')
<main class="container">
    <div class="row justify-content-md-center">
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

    <div class="row justify-content-md-center">
        @foreach($posts as $post)
        <div class="col-md-10">
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
    <div class="row justify-content-md-center">
        
            {{ $posts->links('pagination::bootstrap-4') }}    

    </div>
</main>
@endsection