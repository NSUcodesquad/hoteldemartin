<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Posts;
use DB;
use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $contact =  Contact::all();
        return view('pages.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contact');
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
            'phoneno' => 'required',
            'msg' => 'required',
        ]);


        $contacts = [];

        $contacts['name'] = $request->get('name');
        $contacts['email'] = $request->get('email');
        $contacts['msg'] = $request->get('msg');

        // Create Post
         // $contact = new Contact;
      //  $contact->name = $request->input('name');
       // $contact->email = $request->input('email');
      //  $contact->phoneno = $request->input('phoneno');
      //  $contact->msg = $request->input('msg');
       // $contact->id = auth()->user()->id;
      //  $contact->save();
        return redirect('\contact')->with('success', 'Message Send');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Posts::find($id);
        return view('contact.show') -> with('posts', $contacts); 
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
