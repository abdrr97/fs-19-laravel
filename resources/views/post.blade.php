@extends('layout.app')

@section('content')
    <h1>Post Page</h1>

    {{ $posts[1] }}
    {{ $user_id }}
    {{-- {{ $name }} --}}
    {{-- {{ $postId }}
    {{ $author }} --}}

@endsection
