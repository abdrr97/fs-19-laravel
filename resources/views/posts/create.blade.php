@extends('layouts.app')


@section('content')

    <h1>New Post</h1>


    {{-- form --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <input type="text" name="title"><br>
        <textarea name="content"></textarea><br>
        <button>save</button>
    </form>

@endsection
