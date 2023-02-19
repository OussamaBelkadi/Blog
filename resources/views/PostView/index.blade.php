@extends('home')

@section('content')
    <h1>List of Posts</h1>
    <ul>
        @forelse($posts as $post)
        <li>
            <h2><a href="{{ route('home.show', ['home' => $post->id] )}}">{{ $post->title }}</a></h2>
            <p>{{ $post->content }}</p>
            <em> {{ $post->created_at }}</em>
        </li>
        @empty
            <h1>Not Post Exist</h1>
        @endforelse
    </ul>
@endsection