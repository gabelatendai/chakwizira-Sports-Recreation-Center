<?php

namespace App\Http\Controllers;

use App\About;
use App\Players;
use Session;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public  function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $pagenate = Players::orderBy('created_at','desc')->paginate(8);
        return view ('/admin/team/index',['teams'=>$pagenate]);
      //  return view('/admin/team/index')->with('teams', Players::all());

    }
    public function list()
    {
    //    $pagenate = Players::orderBy('created_at','desc')->paginate(8);
        return view ('/admin/team/list')->with('teams', Players::all())
            ->with('tech', About::all());
        //  return view('/admin/team/index')->with('teams', Players::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/team/create');
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
            'position' =>'required',
            'information' =>'required',
            'dob' =>'required',
            'IdNum'=>'required',
            'image' =>'required|image',

            'pnumber' =>'required',
        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= 'images/team/';
        $image->move($path, $featured_new_name);
        $drinks = Players::create([
            'name'=> $request->name,
            'position'=> $request->position,
            'information'=> $request->information,
            'IdNum'=> $request->IdNum,
            'dob'=> $request->dob,
            'image'=>'images/team/'.$featured_new_name,
            'pnumber'=> $request->pnumber,
        ]);

        Session::flash('success',' Successfully Added!');
        return redirect()->route('team.index');
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
        $teams =  Players::find($id);

        return view('/admin/team/edit')->with('teams',$teams);
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
            'position' =>'required',
            'information' =>'required',
            'dob' =>'required',
            'IdNum'=>'required',
            'pnumber' =>'required',
        ]);
        $teams =  Players::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path='images/team/';
            $image->move($path, $featured_new_name);
            $teams-> image= 'images/team/'.$featured_new_name;
        }
        $teams-> name = $request ->name;
        $teams-> position = $request ->position;
        $teams-> IdNum = $request ->IdNum;
        $teams-> dob = $request ->dob;
        $teams-> information = $request ->information;
        $teams-> pnumber = $request ->pnumber;

        $teams->save();
        //  $meal->tags()->sync($request->tags);
        Session::flash('success',' Updated successfully!');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams =  Players::find($id);
        $teams ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
