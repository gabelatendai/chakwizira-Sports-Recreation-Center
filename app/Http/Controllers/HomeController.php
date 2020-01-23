<?php

namespace App\Http\Controllers;

use App\News;
use App\Players;
use App\Services;
use App\User;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pagenate = Services::orderBy('created_at','desc')->paginate(5);
        $players = News::orderBy('created_at','desc')->paginate(5);
        return view ('admin/index',['services'=>$pagenate])
            ->with(['players'=>$players]);
    }
    public function users()
    {
        return view('admin/users')->with('users',User::all());
    }
    public function remove($id)
    {

        $users =  User::find($id);

        $users-> admin =0;

        $users->save();
//  $meal->tags()->sync($request->tags);
        Session::flash('info',' Permisions successfully Updated!');
        return redirect()->back();
    }
    public function add_permissions($id)
    {

        $users =  User::find($id);

        $users-> admin =1;

        $users->save();
//  $meal->tags()->sync($request->tags);
        Session::flash('info',' Permisions successfully Updated!');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $users =  User::find($id);
        $users ->delete();
        Session::flash('info','Successfully deleted!');
        return redirect()->back();
    }
}
