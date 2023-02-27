@extends('EditPosts')

@section('edit')
    <form action="{{ route('edit.update',[$post->id])}}" method="Post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}">
        <input type="text" name="content" value="{{$post->content}}">
        <input type="file" name="image">
        <button type="submit">Update post</button>
    </form>
@endsection