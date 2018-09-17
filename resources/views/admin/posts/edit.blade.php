@extends('layouts.app')

@section('content')
	<div class="panel panel-default">

		@include('admin.includes.errors')
		<div class="panel-heading">
			Edit Post: {{ $post->title }}
		</div>
			
		<div class="panel-heading-body">
			<form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" value="{{ $post->title }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control" value="{{ $post->title }}">
				</div>

				<div class="form-group">
					<label for="category">Select a Category</label>
					<select class="form-control" id="category" name="category_id">
						@foreach($categories as $category)
							<option value="{{ $category->id }}"
								@if($post->category->id == $category->id)
									selected
								@endif
								>{{ $category->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="tags">Select Tags</label>
					@foreach( $tags as $tag)
					<div class="checkbox">
						<label><input type="checkbox" name="tags[]" value="{{$tag->id}}"
							@foreach( $post->tags as $t)
								@if($tag->id == $t->id)
									checked
								@endif
							@endforeach
							>{{$tag->tag}}</label>
					</div>
					@endforeach
				</div>

				<div class="form-group">
					<label for="content">Content</label>
					<textarea class="form-control" id="content" name="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update Post</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
@stop