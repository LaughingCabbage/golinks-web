@extends('layouts.app')

@section('title', '| {{$post->title}}')

@push('stylesheets')
{{ Html::style('css/blog.css') }}
@endpush

@section('content')

<div role="main" class="container">
    <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <h1>{{ $post->title }}</h1>
                    <p class="lead">{{ $post->body }} </p>
                </div>
            </div>
        
        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sizebar-module">
                <dl class="dl-horizontal">
                    <dt>Created:</dt>
                    <dd>{{ date_format($post->created_at, 'M j, Y') }}</dd>
                </dl>
                @if($post->created_at != $post->updated_at)
                <dl class="dl-horizontal">
                    <dt>Updated:</dt>
                    <dd>{{ date_format($post->updated_at, 'M j, Y') }}</dd>
                </dl> 
                @endif

                {!! Html::linkRoute('blog', '<< Back', [$post->id], ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                
            </div>
        </aside>
    </div>
</div>

@endsection