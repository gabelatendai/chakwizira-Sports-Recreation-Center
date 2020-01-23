<?php

namespace App\Http\Controllers;

use App\StaticBanners;
use Illuminate\Http\Request;
use Session;
class StaticBannersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $pagenate = StaticBanners::orderBy('created_at','desc')->paginate(6);
        return view ('/admin/static/index',['statics'=>$pagenate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/static/create');  //
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
            'headline' =>'required',
            'pagename' =>'required',
            'image' =>'required|image:jpg',

            'description' =>'required',
        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= 'images/static/';
        $image->move($path, $featured_new_name);
        $banners = StaticBanners::create([
            'pagename'=> $request->pagename,
            'headline'=> $request->headline,
            'image'=>'images/static/'.$featured_new_name,
            'description'=> $request->description,



        ]);

        Session::flash('success',' Successfully Added!');
        return redirect()->route('statics.index');
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
        $statics =  StaticBanners::find($id);

        return view('/admin/static/edit')->with('statics',$statics);
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
            'headline' =>'required',

            'pagename' =>'required',

            'description' =>'required',
        ]);
        $banners =  StaticBanners::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= 'images/static/';
            $image->move($path, $featured_new_name);
            $banners-> image= 'images/static/'.$featured_new_name;
        }
        $banners-> pagename = $request ->pagename;
        $banners-> headline = $request ->headline;
        $banners-> description = $request ->description;

        $banners->save();
        Session::flash('success',' Updated successfully!');
        return redirect()->route('statics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banners =  StaticBanners::find($id);
        $banners ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
