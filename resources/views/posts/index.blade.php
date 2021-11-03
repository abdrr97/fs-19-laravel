@extends('layouts.app')
{{-- master page --}}

@section('content')

    <ul>
        @foreach ($posts as $post)
            <li>
                {{ $post->title }}
                {{-- CARBON --}}
                <small>{{ $post->created_at->diffForHumans() }}</small>
            </li>
        @endforeach
    </ul>

@endsection
