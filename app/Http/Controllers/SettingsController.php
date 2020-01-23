<?php

namespace App\Http\Controllers;

use App\Settings;
use Session;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public  function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $pagenate = Settings::orderBy('created_at','desc')->paginate(4);
        return view ('/admin/settings/index',['settings'=>$pagenate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  return view('/admin/settings/create');
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
            'image' =>'required|image:jpg',
            'description' =>'required',
            'about' =>'required',
            'mission' =>'required',
            'vision' =>'required',
            'email' =>'required',

            'address' =>'required',
            'pnumber' =>'required',
            'pnumber2' =>'required',


        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path='images/settings/';
        $image->move($path, $featured_new_name);
        $settings = Settings::create([
            'name'=> $request->name,
            'image'=>'images/settings/'.$featured_new_name,
            'description'=> $request->description,
            'about'=> $request->about,
            'email'=> $request->email,
            'address'=> $request->address,
            'mission'=> $request->mission,
            'vision'=> $request->vision,
            'pnumber'=> $request->pnumber,
            'pnumber2'=> $request->pnumber2,
        ]);

        Session::flash('success','Post Successfully created!');
        return redirect()->route('settings.index');
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
        $settings =  Settings::find($id);

        return view('/admin/settings/edit')->with('settings',$settings);
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
            'description' =>'required',
            'about' =>'required',
            'email' =>'required',
            'mission' =>'required',
            'vision' =>'required',
            'address' =>'required',
            'pnumber' =>'required',
            'pnumber2' =>'required',
        ]);
        $settings =  Settings::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= 'images/settings/';
            $image->move($path, $featured_new_name);
            $settings-> image= 'images/settings/'.$featured_new_name;
        }
        $settings-> name = $request ->name;
        $settings-> description = $request ->description;
        $settings-> about = $request ->about;
        $settings-> email = $request ->email;
        $settings-> mission = $request ->mission;
        $settings-> vision = $request ->vision;
        $settings-> address = $request ->address;
        $settings-> pnumber = $request ->pnumber;
        $settings-> pnumber2 = $request ->pnumber2;
        $settings->save();

        Session::flash('success',' Updated successfully!');
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $settings =  Settings::find($id);
        $settings ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
