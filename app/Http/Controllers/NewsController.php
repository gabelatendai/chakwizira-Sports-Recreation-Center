<?php

namespace App\Http\Controllers;

use App\News;
use Session;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $pagenate = News::orderBy('created_at','desc')->paginate(5);
        return view ('/admin/news/index',['news'=>$pagenate]);

    }
    public function create()
    {
        return view('/admin/news/create');

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
            'category' =>'required',
            'image' =>'required|image:jpg',
            'description' =>'required',
        ]);

        $image = $request->image;
        $featured_new_name = time().$image->getClientOriginalName();
        $path='images/news/';
        $image->move($path, $featured_new_name);
        $news = News::create([
            'title'=> $request->title,
            'category'=> $request->category,
            'image'=>'images/news/'.$featured_new_name,
            'msg'=> $request->description,
            'slug'=>str_slug($request->title) ,
        ]);

        Session::flash('success','Post Successfully created!');
        return redirect()->route('news.index');
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
        $news =  News::find($id);

        return view('/admin/news/edit')->with('news',$news);
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
            'category' =>'required',
            'description' =>'required',
        ]);
        $news =  News::find($id);
        if($request->hasFile('image')){

            $image = $request->image;
            $featured_new_name = time().$image->getClientOriginalName();
            $path= 'images/news/';
            $image->move($path, $featured_new_name);
            $news-> image= 'images/news/'.$featured_new_name;
        }
        $news-> title = $request ->title;
        $news-> category = $request ->category;
        $news-> msg = $request ->description;
        $news->slug = str_slug($request->title);
        $news->save();
        Session::flash('success',' Updated successfully!');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news =  News::find($id);
        $news ->delete();
        Session::flash('success','Successfully deleted!');
        return redirect()->back();
    }
}
