@extends('layouts.app')


@section('content')

    <h1>New Post</h1>

    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{-- form --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <input value="{{ old('title') }}" type="text" name="title"><br>
        @error('title')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <textarea name="content">{{ old('content') }}</textarea><br>
        @error('content')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <button>save</button>
    </form>

@endsection
