@if(count($errors) > 0)
<br>
	@foreach($errors->all() AS $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
	@endforeach 
@endif
<br>
@if(session('success'))
	<div class="alert alert-success">
		{{session('success')}}
	</div>
	
@endif
<br>
@if(session('error'))
	<div class="alert alert-danger">
		{{session('error')}}
	</div>
@endif
