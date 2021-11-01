@extends('layout.app')

@section('content')
    <h1>Home Page</h1>

    <a href="{{ route('about.page') }}">About</a>
    <a href="/contact">Contact</a>
@endsection
