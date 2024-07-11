@extends('layouts.app')

@section('content')

		<form action="{{route('admin.login')}}" method="post">
			{{csrf_field()}}
			@include('admin.login._form')
		</form>

	@endsection