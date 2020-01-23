<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Session;
class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    public  function __construct()
    {
        $this->middleware('admin');
    }
     *  */
    public function index()
    {
        return view('/admin/techteam/index')->with('teams', About::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/techteam/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, [
            'name' =>'required',
            'role' =>'required',
            'image' =>'required|image',
            'information'=>'required',
            'pnumber' =>'required',
        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= 'images/team/';
        $image->move($path, $featured_new_name);
        $drinks = About::create([
            'name'=> $request->name,
            'role'=> $request->role,
            'information'=> $request->information,
            'image'=>'images/techteam/'.$featured_new_name,
            'pnumber'=> $request->pnumber,
        ]);

        Session::flash('success',' Successfully Added!');
        return redirect()->route('techteam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams =  About::find($id);

        return view('/admin/techteam/edit')->with('teams',$teams);
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

        $this->validate($request, [
            'name' =>'required',
            'role' =>'required',
            'information'=>'required',
            'pnumber' =>'required',
        ]);
        $teams =  About::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= 'images/techteam/';
            $image->move($path, $featured_new_name);
            $teams-> image= 'images/techteam/'.$featured_new_name;
        }
        $teams-> name = $request ->name;
        $teams-> information = $request ->information;
        $teams-> role = $request ->role;
        $teams-> pnumber = $request ->pnumber;
        $teams->save();
          //  $meal->tags()->sync($request->tags);
        Session::flash('success',' Updated successfully!');
        return redirect()->route('techteam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams =  About::find($id);
        $teams ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
