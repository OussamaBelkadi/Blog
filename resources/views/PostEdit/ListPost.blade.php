@extends('EditPosts')

@section('content')
    <main>
        <h2>Manage Posts</h2>
        @auth 
         {{ Auth::user()->name }}
         @endauth
        <button class="btn-ceate"><a href="{{route('edit.create')}}">create</a></button>
        <div class="table">
        <table class="dash_board">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>image</th>
                    <th>Edit</th>
                    
                </tr>
            </thead>
            @foreach($posts as $post)
            <tbody>
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td><button class="btn-edit"><a href="{{ route('edit.edit',['edit'=>$post->id]) }}" class="btn sm">Edit</a></button></td>
                    <form action="{{ route('edit.destroy', ['edit'=>$post->id]) }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        
                        <td><button class="btn-delete" type="submit">Delete</button></td>
                    </form>
                </tr>
            </tbody>
            @endforeach
        </table>
        </div>
    </main>
@endsection