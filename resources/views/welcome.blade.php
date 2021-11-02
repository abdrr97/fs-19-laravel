@extends('layouts.app')
{{-- master page --}}

@section('style')
    <style>
        h1 {
            color: red;
        }

    </style>
@endsection

@section('content')

    <h1>Welcome</h1>

    <a href="{{ route('about.page') }}">About</a>
    <a href="/contact">Contact</a>

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post }}</li>
        @endforeach
    </ul>

@endsection
