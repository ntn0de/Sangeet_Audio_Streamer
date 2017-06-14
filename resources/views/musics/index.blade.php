@extends('master')

@section('title','Sangeet')
@section('subtitle','Select Your Mood')
@section('mselect')
<div class="panel-body">
						<div class="row">
							<div align= "center" class="col-md-12">
								<h3 align="center">Mood Selection</h3>
								<a href="{{ route('musics.mood', ['tag' => 'Sad' ]) }}" class="btn btn-default">Sad</a>
								<a href="{{ route('musics.mood', ['tag' => 'Happy']) }}" class="btn btn-default">Happy</a>
								<a href="{{ route('musics.mood', ['tag' => 'Neutral']) }}" class="btn btn-default">Neutral</a>
							</div>
						</div>
</div>
@endsection
@section('content')
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>Song Name</th>
				<th>Artist</th>
				<th>Album</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@forelse ( $musics as $music )
				<tr>
					<td>{{ $music->Song_name }}</td>
					<td>{{ $music->Artist }}</td>
					<td>{{ $music->Album }}</td>
					<td>
						<a href="{{ route('musics.show', ['id' => $music->id]) }}" class="btn btn-sm btn-info">Show</a>
						<a href="{{ route('musics.edit', ['id' => $music->id]) }}" class="btn btn-sm btn-info">Edit</a>
						<form style="display: inline-block;" action="{{ 		route('musics.destroy', ['id' => $music->id]) }}" method="post">
						<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure, you want to delete?');">Delete</button>
						<input type="hidden" name="_method" value="DELETE">
						{{ csrf_field() }}
						</form>
					</td>
				</tr>
				@empty
					<tr>
						<td colspan="3">No records found.</td>
					</tr>
			@endforelse
		</tbody>
	</table>
</div>
@endsection