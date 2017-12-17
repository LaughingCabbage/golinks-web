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

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection