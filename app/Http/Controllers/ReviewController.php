<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Posts;
use App\Review;
use DB;
use App\Http\Requests;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews =  Review::all();
        return view('review.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.makereview');
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
            'invoiceno' => 'required',
            'body' => 'required',
            'roomtype' => '',
            'rate' => 'required'
        ]);

        // Create Post
        $reviews = new Review;
        $reviews->name = $request->input('name');
        $reviews->email = $request->input('email');
        $reviews->invoiceno = $request->input('invoiceno');
        $reviews->body = $request->input('body');
        $reviews->roomtype = $request->input('roomtype');
       // $reviews->rate = $request->input('rate');
        $reviews->id = auth()->user()->id;
        $reviews->save();
        return redirect('/reviews')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reviews = Review::find($id);
        return view('review.show') -> with('reviews', $reviews); 
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
