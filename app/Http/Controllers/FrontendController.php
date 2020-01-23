<?php

namespace App\Http\Controllers;

use App\About;
use App\Banners;
use App\Gallery;
use App\News;
use App\Players;
use App\Services;
use App\Settings;
use App\StaticBanners;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index()
    {

        return view ('index')->with('settings',Settings::all())
            ->with('services',Services::all())
            ->with('players',Players::all())
            ->with('news',News::all())
            ->with('banners',Banners::all())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('pik',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
        ->with('recent',News::orderBy('created_at','desc')->get()->take(2));
    }
    public function index2()
    {

        return view ('index-2')->with('settings',Settings::all())
            ->with('services',Services::orderBy('created_at','desc')->get()->take(3))
            ->with('players',Players::all())
            ->with('teams',About::all())
            ->with('news',News::all())
            ->with('banners',Banners::all())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }

    public function services()
    {

        return view ('services')->with('settings',Settings::all())
            ->with('services',Services::all())
            ->with('players',Players::all())
            ->with('teams',About::all())
            ->with('news',News::all())
            ->with('banners',Banners::all())
            ->with('piks',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('images',StaticBanners::where('pagename','LIKE','Services')->get())
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function servicedetail($slug){

        $news = Services::where('slug',$slug )->first();
        $next_id =  Services::where('id','>' ,$news->id)->min('id');
        $prev_id =  Services::where('id','<' ,$news->id)->max('id');
        return view ('services-details')->with('services', $news)
            ->with('title',$news->title)
            ->with('next',Services::find($next_id))
            ->with('prev',Services::find($prev_id))
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('settings',Settings::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Services')->get())
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function about()
    {

        return view ('about')->with('banners',Banners::all())
            ->with('settings',Settings::all())
            ->with('services',Services::all())
            ->with('techteam',About::all())
            ->with('players',Players::all())
            ->with('images',StaticBanners::where('pagename','LIKE','About')->get())
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));
    }
    public function team()
    {
        $pagenate = Players::orderBy('created_at','desc')->paginate(15);

        return view ('team',['players'=>$pagenate])
          ->with('banners',Banners::all())
            ->with('settings',Settings::all())
            ->with('techteam',About::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Team')->get())
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function portfolio()
    {
        $pagenate = Gallery::orderBy('created_at','desc')->paginate(8);

        return view ('portfolio',['piks'=>$pagenate])
            ->with('banners',Banners::all())
            ->with('settings',Settings::all())
            ->with('techteam',About::all())
            ->with('players',Players::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Portfolio')->get())
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
                ->with('recent',News::orderBy('created_at','desc')->get()->take(2));
    }
    public function portfolio2()
    {
        $pagenate = Gallery::orderBy('created_at','desc')->paginate(16);

        return view ('portfolio2',['piks'=>$pagenate])
            ->with('banners',Banners::all())
            ->with('settings',Settings::all())
            ->with('techteam',About::all())
            ->with('players',Players::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Portfolio')->get())
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function blog()
    {

        $pagenate = News::orderBy('created_at','desc')->paginate(3);

        return view ('blog',['news'=>$pagenate])->with('banners',Banners::all())
            ->with('settings',Settings::all())
            ->with('techteam',About::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('players',Players::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Blog')->get())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));
    }
    public function bloggrid()
    {

        $pagenate = News::orderBy('created_at','desc')->paginate(10);

        return view ('blog-grid',['news'=>$pagenate])->with('banners',Banners::all())
            ->with('settings',Settings::all())
            ->with('techteam',About::all())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('players',Players::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Blog')->get())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));
    }
    public function contact()
    {

        return view ('contact')->with('banners',Banners::all())
            ->with('settings',Settings::all())
            ->with('techteam',About::all())
            ->with('players',Players::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Contact')->get())
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function single($slug){

        $news = News::where('slug',$slug )->first();
        $next_id =  News::where('id','>' ,$news->id)->min('id');
        $prev_id =  News::where('id','<' ,$news->id)->max('id');
        return view ('news')->with('news', $news)
            ->with('title',$news->title)
            ->with('next',News::find($next_id))
            ->with('prev',News::find($prev_id))
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('settings',Settings::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Blog')->get())
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2))

        ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8));
    }
    public function category(){

        return view ('news-categorised')
            ->with('news',News::where('category','LIKE','Games')->get())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
           ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('settings',Settings::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Blog')->get())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function newsabout(){
        return view ('news-about')
            ->with('news',News::where('category','LIKE','About')->get())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('settings',Settings::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Blog')->get())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function newspress(){
        return view ('news-presss')
            ->with('news',News::where('category','LIKE','Press')->get())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('settings',Settings::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Blog')->get())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function newssoccer(){

        return view ('news-soccer')
            ->with('news',News::where('category','LIKE','Soccer')->get())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('settings',Settings::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Blog')->get())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function newsnetball(){

        return view ('news-netball')
            ->with('news',News::where('category','LIKE','Netball')->get())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('settings',Settings::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Blog')->get())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function newscomputer(){

        return view ('news-computer')
            ->with('news',News::where('category','LIKE','Computer')->get())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))

            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('settings',Settings::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Blog')->get())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
    public function newsuncat(){

        return view ('news-uncategorised')
            ->with('news',News::where('category','LIKE','Uncategorized')->get())
            ->with('posts',News::orderBy('created_at','desc')->get()->take(3))
            ->with('imgs',Gallery::orderBy('created_at','desc')->get()->take(1))
            ->with('settings',Settings::all())
            ->with('images',StaticBanners::where('pagename','LIKE','Blog')->get())
            ->with('galleries',Gallery::orderBy('created_at','desc')->get()->take(8))
            ->with('recent',News::orderBy('created_at','desc')->get()->take(2));

    }
}
