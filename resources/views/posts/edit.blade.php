@extends('posts/master')
@section('content')
<h2 class="my-3"> Upadte  the post</h2>
@if($errors->all())
<div class="alert alert-danger">

	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	
<li>you have some error</li>
$endforeach
</div>
@endif

@if (session()->has('message'))
<div class="alert alert-success">
	{{session()->get('message')}}
</div>
@endif


<form action="{{route('posts.update',$post->id)}}" method="post">
	@csrf
	@method('put')
	<div class="form-group">
		<label for="title" value='{{$post->title}}'>Title"></label>
		<input type="text" name="title" id="title" class="form-control">
	</div>
	<div class="form-group">
        <label for="content>Content"></label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$post->control}}
        	
        </textarea>
        }
        }
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-outline-info">Update the post</button>
	</div>
	</form>
@endsection