@extends('layouts.app')

@section('content')
	<div class="panel panel-default">

		@include('admin.includes.errors')
		<div class="panel-heading">
			Update Category: {{ $category->name}}
		</div>

		<div class="panel-body">
			<form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
				@csrf

				<div class="form-group">
					<label for="name">NAME</label>
					<input type="text" name="name" value="{{ $category->name }}" class="form-control">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
						Update Category
					</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
@stop