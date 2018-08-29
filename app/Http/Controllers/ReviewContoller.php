<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use DB;

class ReviewContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Posts::all();
        return view('review.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createreview()
    {
        return view('review.review');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storereview(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'invoiceno' => 'required',
            'body' => 'required',
            'rate' => 'required'
        ]);

        // Create Post
        $posts = new Posts;
        $posts->name = $request->input('name');
        $posts->email = $request->input('email');
        $posts->invoiceno = $request->input('invoiceno');
        $posts->body = $request->input('body');
        $posts->rate = $request->input('rate');
        $posts->id = auth()->user()->id;
        $posts->save();
        return redirect('/postsreview')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showreview($id)
    {
        $posts = Posts::find($id);
        return view('review.show') -> with('posts', $posts); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editreview($id)
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
