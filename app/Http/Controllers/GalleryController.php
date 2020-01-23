<?php

namespace App\Http\Controllers;

use App\Gallery;
use Session;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $pagenate = Gallery::orderBy('created_at','desc')->paginate(8);
        return view ('/admin/gallery/index',['galleries'=>$pagenate]);

    }
    public function list()
    {
        $pagenate = Gallery::orderBy('created_at','desc')->paginate(20);
        return view ('/admin/gallery/list',['galleries'=>$pagenate]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/gallery/create');
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
            'caption' =>'required',

            'image' =>'required|image:jpg',

            'description' =>'required',
        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path= 'images/gallery/';
        $image->move($path, $featured_new_name);
        $gallery = Gallery::create([
            'caption'=> $request->caption,

            'image'=>'images/gallery/'.$featured_new_name,
            'description'=> $request->description,
        ]);

        Session::flash('success',' Successfully Added!');
        return redirect()->route('gallery.index');
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
        $gallery =  Gallery::find($id);

        return view('/admin/gallery/edit')->with('galleries',$gallery);

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
            'caption' =>'required',
            'description' =>'required',
        ]);
        $gallery =  Gallery::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= 'images/gallery/';
            $image->move($path, $featured_new_name);
            $gallery-> image= 'images/gallery/'.$featured_new_name;
        }
        $gallery-> caption = $request ->caption;

        $gallery-> description = $request ->description;

        $gallery->save();
        //  $meal->tags()->sync($request->tags);
        Session::flash('success',' Updated successfully!');
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery =  Gallery::find($id);
        $gallery ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
