@extends('layouts.app')

@section('content')
	<div class="panel panel-default">

		@include('admin.includes.errors')
		<div class="panel-heading">
			Create a new post
		</div>

		<div class="panel-body">
			<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control">
				</div>

				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control">
				</div>

				<div class="form-group">
					<label for="category">Select a Category</label>
					<select class="form-control" id="category" name="category_id">
						@foreach($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>


				<div class="form-group">
					<label for="content">Content</label>
					<textarea class="form-control" id="content" name="content" cols="5" rows="5" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Store Post</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@stop