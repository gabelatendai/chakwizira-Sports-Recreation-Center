<?php

namespace App\Http\Controllers;

use App\Services;
use Session;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
   public  function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $pagenate = Services::orderBy('created_at','desc')->paginate(4);
        return view ('/admin/services/index',['services'=>$pagenate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/services/create');
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
            'title' =>'required',
            'image' =>'required|image:jpg',

            'description' =>'required',

        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= 'images/services/';
        $image->move($path, $featured_new_name);
        $services = Services::create([
            'title'=> $request->title,
            'image'=>'images/services/'.$featured_new_name,
            'description'=> $request->description,
            'slug'=>str_slug($request->title) ,
        ]);

        Session::flash('success','Post Successfully created!');
        return redirect()->route('services.index');
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
        $services =  Services::find($id);

        return view('/admin/services/edit')->with('services',$services);
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
            'title' =>'required',
            'description' =>'required',
        ]);
        $services =  Services::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= 'images/services/';
            $image->move($path, $featured_new_name);
            $services-> image= 'images/services/'.$featured_new_name;
        }
        $services-> title = $request ->title;
        $services-> description = $request ->description;
        $services->slug = str_slug($request->title);
        $services->save();

        Session::flash('success',' Updated successfully!');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services =  Services::find($id);
        $services ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
