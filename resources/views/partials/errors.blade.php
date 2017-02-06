	@if (! $errors->isEmpty())
	<div class="alert alert-danger">
		<p><strong>Oops!</strong> Please fix the Following errors:</p>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif