@extends('layouts.app')
{{-- master page --}}

@section('content')

    <ul>
        @foreach ($posts as $post)
            <li>
                {{ $post->title }}
                <p>
                    {{ $post->content }}
                </p>
            </li>
        @endforeach
    </ul>

@endsection
