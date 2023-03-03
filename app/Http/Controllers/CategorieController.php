<?php

namespace App\Http\Controllers;

use App\Models\Catigorie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategorieController extends Controller
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
        //display the view
        $categories = Catigorie::all();
        return view('PostView.index', [ 'categories'=> Catigorie::all()]);
    }

    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function create()
    {
        //
    }

   /**
    * Display a listing of the resource.
    *
    * @return RedirectResponse
    */
    public function store(Request $request) 
    {
        //save new Catigorie and redirect to index
    }

    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function show(string $id)
    {
        //
    }

    // /**
    // * Display a listing of the resource.
    // *
    // * @return Response
    // */
    // public function edit(string $id): Response
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id): RedirectResponse
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id): RedirectResponse
    // {
    //     //
    // }
}
