<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;

class EditPost extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
   /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        return View('PostEdit.ListPost',
        [ "posts" => Post::all()]);
    }

    /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
    public function create()
    {
        return view('PostEdit.create');
    }

    /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
    public function store(StorePost $request)
    {
        $post = new Post();
            
           $image = $request->image;
           $name = $image->getClientOriginalName();
           
           $image->storeAs('public/image', $name);
           
            $post->title = $request->input('title');
            $post->content = $request->input('content');    
            $post->img = $name;
            $post->save(); 
            return redirect()->route('edit.index')->with('status', 'Add Post is Successfully');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id): Response
    // {
    //     //
    // }

    /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view("PostEdit.edit",[
            'post'=>$post
        ]);
    }
  /**
    * Show the form for creating a new resource.
            *
            * @return RedirectResponse
    */
    public function update(StorePost $request, string $id)
    {
        $post = Post::find($id);
       
        if(empty($name)){
         $post->title = $request->input('title');
         $post->content = $request->input('content');    
        //  $post->img = $name;
         $post->save();
        }else{
            
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            
            $image->storeAs('public/image', $name);
            $post->title = $request->input('title');
         $post->content = $request->input('content');    
         $post->img = $name;
         $post->save();
        }
        return redirect()->route('edit.index');

    }

    /**
    * Show the form for creating a new resource.
            *
            * @return RedirectResponse
    */
    public function destroy(string $id){
       
        Post::destroy($id);
        return redirect()->route('edit.index');
    }
}
