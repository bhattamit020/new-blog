@extends('posts/master')
@section('content')
<div class="card">
<div class="card-header">
	<h2>{{post->title}}</h2>
</div>
<div class="card-body">
	<p>
		{{$post->content}}
	</p>
</div>
</div>
@stop