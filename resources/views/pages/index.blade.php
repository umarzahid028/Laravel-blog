@extends('layouts.app')
@section('content')
	<div class="jumbotron text-center">
		<h1>{{$title}}</h1>
		<p>This is Laravel Blog Application</p>
		<p>
	       <a href="/login" class="btn btn-primary my-2">Login</a>
	       <a href="/register" class="btn btn-secondary my-2">Signup</a>
	    </p>
	</div>
	
@endsection