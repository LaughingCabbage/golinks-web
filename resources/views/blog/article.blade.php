@extends('layouts.app')

@section('title', '| View Article')



@section('content')

<div class="container">
    <div class="row mt-5">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header text-center">{{ $post->title }}</div>
                    <div class="card-body">{{ $post->body }} </div>
                </div>
            </div>
        </hr>
        <aside class="col-sm-3 ml-sm-auto">
            <div class="sizebar-module">
                <div class="card">
                    <div class="card-body">
                        <dt>Created:</dt>
                        <dd>{{ date_format($post->created_at, 'M j, Y') }}</dd>
                        @if($post->created_at != $post->updated_at)
                        <dt>Updated:</dt>
                        <dd>{{ date_format($post->updated_at, 'M j, Y') }}</dd> 
                        @endif

                        {!! Html::linkRoute('blog', '<< Back', [$post->id], ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>

@endsection