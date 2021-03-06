<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use DB;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Posts::all();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.reserve');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'roomtype' => 'required',
            'persons' => 'required',
            'reservefrom' => 'required',
            'reserveto' => 'required',
            'phoneno' => 'required'
        ]);

        // Create Post
        $posts = new Posts;
        $posts->name = $request->input('name');
        $posts->email = $request->input('email');
        $posts->reservefrom = $request->input('reservefrom');
        $posts->reserveto = $request->input('reserveto');
        $posts->persons = $request->input('persons');
        $posts->roomtype = $request->input('roomtype');
        $posts->phoneno = $request->input('phoneno');
        $posts->address= $request->input('address');
        $posts->user_id = auth()->user()->id;
        $posts->save();
        return redirect('/posts')->with('success', 'Post Created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $user_id == auth()->user()->id;
        $posts == Posts::find($user_id);
        return view('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
