@extends('EditPosts')
@section('add')
<form action="{{ route('edit.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title"></label>
         <input id='title' type="text" name="title" value="{{ old('title') }}">
         @if($errors->any())
            @foreach($errors->all() as $error)
                <h6>{{ $error }}</h6>
            
            @endforeach
        @endif
    </div>
    <div>
        <label for="content"></label> 
        <input id="content" type="text" name="content" value="{{ old('content') }}">
        
    </div>
    
    <div>
        <label for="image">Image</label> 
        <input id="image" type="file" name="image">
        
    </div>
    <input type="submit" value="Goo">
</form>

@endsection 


