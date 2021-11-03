@extends('layouts.app')
{{-- master page --}}

@section('content')

    <ul>
        @foreach ($posts as $post)
            <li>
                {{-- <a href="/posts/{{ $post->id }}">{{ $post->title }}</a> --}}
                <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                    {{ $post->title }}
                </a>
                {{-- CARBON --}}
                <small>{{ $post->created_at->diffForHumans() }}</small>
            </li>
        @endforeach
    </ul>

@endsection
