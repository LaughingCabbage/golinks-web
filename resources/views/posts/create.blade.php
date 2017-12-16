@extends('layouts.app')

@section('title', '| Create New Post')

@push('stylesheets')
 {{ Html::style('css/parsley.css') }}
@endpush

@section('content')

    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <h1>Create New Blog Post</h1>
            <hr>
            {!! Form::open(array('route' => 'post.store', 'data-parsley-validate' => '')) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('body', "Body:") }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
                
                {{ Form::submit('Create', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@push('scripts')
{{ Html::script('js/parsley.min.js') }}
@endpush