@extends('layouts.app')

@section('content')
	<div class="panel panel-default">

		@include('admin.includes.errors')
		<div class="panel-heading">
			Create a new CATEGORY
		</div>

		<div class="panel-body">
			<form action="{{ route('category.store') }}" method="post">
				@csrf

				<div class="form-group">
					<label for="name">NAME</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
						Store Category
					</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
@stop