@extends('layouts.app')


@section('content')

    {{ $post->title }}

    <p>
        {{ $post->content }}
    </p>

    <span>Created at {{ $post->created_at->diffForHumans() }}</span>
    <span>Updated at {{ $post->updated_at->diffForHumans() }}</span>

@endsection
