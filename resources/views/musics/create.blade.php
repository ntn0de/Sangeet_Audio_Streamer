@extends('master')

@section('title', 'Add New Songs')
@section('subtitle','Select your mood')
@section('content')
	<form action="{{ route('musics.store') }}" method="post">
		@include('musics._form-elements')
		{{ csrf_field() }}
	</form>
@endsection