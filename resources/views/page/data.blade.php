@extends('layout')

@section('content')
<h1>Data</h1>
<ul>
	@foreach ($data as $nama)
		<li>{{ $nama }}</li>
	@endforeach
</ul>
@endsection