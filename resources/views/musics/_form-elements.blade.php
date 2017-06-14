@php
	$music = @@isset($music) ? $music : (object) [
		'tag' => '',
		'Song_name' => '',
		'Artist' => '',
		'Album' => '',
		'count' =>''
	];
@endphp

<div class="form-group">
	<label for="tag">Tag: </label>
		<select class="form-control" id="tag" name="tag">
	  <option value="Sad">Sad</option>
	  <option value="Happy">Happy</option>
	  <option value="Neutral">Neutral</option>
	  <option value="Romance">Romance</option>
		</select> 
</div>
<div class="form-group">
	<label for="phone">Song Name: </label>
	<input type="text" class="form-control" id="Song_name" name="Song_name" value="{{ old('Song_name', $music->Song_name) }}">
</div>
<div class="form-group">
	<label for="email">Artist: </label>
	<input type="text" class="form-control" id="Artist" name="Artist" value="{{ old('Artist', $music->Artist) }}">
</div>
<div class="form-group">
	<label for="email">Album: </label>
	<input type="text" class="form-control" id="Album" name="Album" value="{{ old('Album', $music->Album) }}">
</div>
<div class="form-group">
	<input type="hidden" value="{{ 0 , $music->count }}">
</div>
<div class="form-group">
	<button class="btn btn-success" type="submit">Save</button>
	<a href="{{ route('musics.index') }}" class="btn btn-danger">Cancel</a>
</div>
