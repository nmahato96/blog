@extends('layouts.app')

@section('content')
	<div class="panel panel-default">

		@include('admin.includes.errors')
		<div class="panel-heading">
			Create a new TAG
		</div>

		<div class="panel-body">
			<form action="{{ route('tag.store') }}" method="post">
				@csrf

				<div class="form-group">
					<label for="name">TAG</label>
					<input type="text" name="tag" class="form-control">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
						Store Tag
					</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
@stop