@extends('layouts.app')

@section('content')
	<div class="panel panel-default">

		@include('admin.includes.errors')
		<div class="panel-heading">
			Edit TAG: {{$tag->tag}}
		</div>

		<div class="panel-body">
			<form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
				@csrf

				<div class="form-group">
					<label for="name">TAG</label>
					<input type="text" name="tag" value="{{$tag->tag}}" class="form-control">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
						Update Tag
					</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
@stop