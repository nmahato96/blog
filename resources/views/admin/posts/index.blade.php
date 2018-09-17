@extends('layouts.app')



@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		Published Posts
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
					Edit
				</th>
				<th>
					Trash
				</th>
			</thead>
			<tbody>
				@if( $posts->count() > 0 )
				@foreach($posts as $post)
				<tr>
					<td>
						<img src="{{ $post->featured }}" alt="{{ $post->name }}" width="90px" height="50px">
					</td>
					<td>
						{{ $post->title }}
					</td>
					<td>
						<a class="btn btn-info" href="{{ route('post.edit', ['id' => $post->id]) }}">Edit</a>
					</td>
					<td>
						<a class="btn btn-danger" href="{{ route('post.trash', ['id' => $post->id]) }}">Trash</a>
					</td>
				</tr>
				@endforeach
				@else
				<tr>
					<td colspan="5" class="text-center">No Published posts!</td>
				</tr>
				@endif
			</tbody>
		</table>          
	</div>
</div>

@stop