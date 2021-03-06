@extends('layouts.app')


@section('content')

    <h1>Edit Post</h1>

    {{-- form --}}
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input value="{{ $post->title }}" type="text" name="title"><br>
        @error('title')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <textarea name="content">{{ $post->content }}</textarea><br>
        @error('content')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <button>update</button>
    </form>

@endsection
