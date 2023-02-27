@extends('home')

@section('content')
@if (session()->has('status'))
    <div class="">
        {{ session()->get('status') }}
    </div>
    @endif
    <h1>List of Posts</h1>
    <ul>
        @forelse($posts as $post)
        <li>
        <img src="{{ asset('/image/'. $post->img)}}" alt="">
            <h2><a href="{{ route('home.show', ['home' => $post->id] )}}">{{ $post->title }}</a></h2>
            <p>{{ $post->content }}</p>
            <em> {{ $post->created_at }}</em>
           
        </li>
        @empty
            <h1>Not Post Exist</h1>
        @endforelse
    </ul>
@endsection