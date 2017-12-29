@extends('layouts.app') @section('title', '| View Post') @push('stylesheets') {{ Html::style('css/blog.css') }} @endpush
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-8 blog-main">
			<div class="card text-center">
				<div class="card-header">{{ $post->title }}</div>
				<div class="card-body">{{ $post->body }} </div>
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
				<dl class="dl-horizontal">
					<dt>Url:</dt>
					<dd>{{ url('blog/'.$post->slug) }}</dd>
				</dl>
				@auth
				{!! Html::linkRoute('post.edit', 'Edit', [$post->id], ['class' => 'btn btn-primary btn-lg btn-block']) !!}
				
				{{ Form::open(['route' => ['post.destroy', $post->id], 'method' => 'DELETE']) }}

				{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-lg btn-block']) }}

				{{ Form::close() }}
				<hr> 
				@endauth 
				{!! Html::linkRoute('blog', '<< Back ', [$post->id], ['class ' => 'btn btn-primary btn-lg btn-block ']) !!}
			   
			</div>
		</aside>
	</div>
</div>
@endsection