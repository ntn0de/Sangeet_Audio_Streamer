@extends('master')

@section('title', 'Show Music')

@section('content')
	<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered">
			<tr>
				<th>Tag </th>
				<td>{{ $music->tag }}</td>
			</tr>
			<tr>
				<th>Song Name :</th>
				<td>{{ $music->Song_name }}</td>
			</tr>
			<tr>
				<th>Artist</th>
				<td>{{ $music->Artist }}</td>
			</tr>
			<tr>
				<th>Album</th>
				<td>{{ $music->Album }}</td>
			</tr>
			<tr>
				<th>Created At</th>
				<td>{{ $music->created_at }}</td>
			</tr>
			<tr>
				<th>Updated At</th>
				<td>{{ $music->updated_at }}</td>
			</tr>
			<tr>
				<th>Count</th>
				<td>{{ $music->count }}</td>
			</tr>
		</table>
	</div>
@endsection