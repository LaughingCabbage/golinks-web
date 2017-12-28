@extends('layouts.app')

@section('title', '| Blog')

@push('stylesheets')
{{ Html::style('css/blog.css') }}
@endpush

@section('content')
<main class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1>Recent Posts</h1>
        </div>
    </div>
    <hr>

    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-sm-10">
            <div class="card mb-3" style="max-width: 100rem;">
                <div class="card-header">{{ date_format($post->created_at, 'M j, Y') }}</div>
                <div class="card-body">
                    <h1 class="card-title"><a href="{{ route('blog.article', $post->slug) }}">{{ $post->title }}</a></h1>
                    <p class="card-text text-truncate">{{ $post->body }}</p>
                </div>
            </div>
        </div>        
        @endforeach
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-10">
            {{ $posts->links('pagination::bootstrap-4') }}    
        </div>
    </div>
</main>
@endsection