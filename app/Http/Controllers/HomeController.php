<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        return view('home');
    }
    public function createLink($path){
        return redirect(createDownloadLink($path));
//        return createDownloadLink($path);
    }
    public function blog($slug){
        $post = Post::where('slug', 'LIKE', "%$slug%")->first();
        if(!$post){
            abort(404);
        }
        return view('post', compact('post'));
    }

    public function blogIndex(){
        $posts = Post::all();
        return view('posts', compact('posts'));
    }
}
