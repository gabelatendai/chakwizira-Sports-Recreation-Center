<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Session;
class TechTeamController extends Controller
{
      public  function __construct()
     {
         $this->middleware('admin');
     }
    public function index()
    {
        $pagenate = About::orderBy('created_at','desc')->paginate(8);
        return view ('/admin/techteam/index',['techteams'=>$pagenate]);
        //  return view('/admin/team/index')->with('teams', Players::all());

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
            'information' =>'required',
            'image' =>'required|image',
            'pnumber' =>'required',
        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= 'images/techteam/';
        $image->move($path, $featured_new_name);
        $techteam = About::create([
            'name'=> $request->name,
            'information'=> $request->information,

            'role'=> $request->role,
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
        $techteam =  About::find($id);

        return view('/admin/techteam/edit')->with('techteam',$techteam);
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
            'information' =>'required',
            'pnumber' =>'required',
        ]);
        $techteam =  About::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path='images/techteam/';
            $image->move($path, $featured_new_name);
            $techteam-> image= 'images/techteam/'.$featured_new_name;
        }
        $techteam-> name = $request ->name;
        $techteam-> role = $request ->role;
        $techteam-> information = $request ->information;
        $techteam-> pnumber = $request ->pnumber;

        $techteam->save();
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
