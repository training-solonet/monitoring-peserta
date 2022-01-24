@extends('layouts.main')

@section('container')
    <h1> Halaman About </h1>
    <h6>{{ $name }}</h6>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="500">
@endsection