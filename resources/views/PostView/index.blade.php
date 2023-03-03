@extends('home')

@section('content')
<!-- @if (session()->has('status'))
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
    </ul> -->
    
    <section class="main">
        <div class="wrapper">
            <div class="left-col">
                <div class="status-wrapper">
                </div>
                @forelse($posts as $post)
                    <div class="post">
                                    <div class="info">
                                        <div class="user">
                                            <div class="profile-pic">
                                                <img src="{{ asset('/image/'. $post->img)}}" alt="" class="img-user">
                                                <p class="username">Model</p>
                                            </div>
                                            <!-- <img src="./5d35dee94000006d59d82c17.jpg" alt=""> -->
                                        </div>
                                    </div>
                                    <img src="{{ asset('/image/'. $post->img)}}" alt="#" class="post-image">
                                    <div class="post-content">
                                        <div class="reaction-wrapper">
                                            <a href="#"><img src="/image/heart.png" alt="#" class="heart-icon"></a>
                                            <p class="like">1.02 likes</p>
                                        </div>
                                        
                                        <p class="description">{{ $post->content }}</p>
                                        <p class="post-time">{{ $post->created_at }}</p>
                                    </div>
                                    <div class="comment-wrapper">
                                        <img src="{{ asset('/image/'. $post->img)}}" class="icon" alt="">
                                        <input type="text" class="comment-box" placeholder="Add a comment">
                                        <button class="comment-btn">Add</button>
                                    </div>
                                    <div></div>
                                </div>
                            @empty
                                <h1>Not Post Exist</h1>
                            @endforelse
                            </div>
                            <div class="right-col">
                                <div class="catigorie-card">
                                    <div class="profile-pic">
                                        <img src="/image/Tajine.jpg" alt="" class="img-categorie">
                                    </div>
                                    <div>
                                        <p class="categorie"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
       
@endsection