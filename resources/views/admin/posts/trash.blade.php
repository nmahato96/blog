@extends('layouts.app')



@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		Trashed Posts
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<th>
					Image
				</th>
				<th>
					Title
				</th>
				<th>
					Restore
				</th>
				<th>
					Delete
				</th>
			</thead>
			<tbody>
				@if( $posts->count() > 0)
				@foreach($posts as $post)
				<tr>
					<td>
						<img src="{{ $post->featured }}" alt="{{ $post->name }}" width="90px" height="50px">
					</td>
					<td>
						{{ $post->title }}
					</td>
					<td>
						<a class="btn btn-xs btn-success" href="{{ route('post.restore', ['id' => $post->id]) }}">Restore</a>
					</td>
					<td>
						<a class="btn btn-danger" href="{{ route('post.kill', ['id' => $post->id]) }}">Delete</a>
					</td>
				</tr>
				@endforeach

				@else
				<tr>
					<td colspan="5" class="text-center">No Trashed posts!</td>
				</tr>
				@endif
			</tbody>
		</table>          
	</div>
</div>

@stop