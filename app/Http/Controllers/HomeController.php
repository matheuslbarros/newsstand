<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

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
     * Show the application index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['articles' => Article::where([])->take(10)->get()]);
    }
    
    /**
     * Show the article by id.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function article($id)
    {
        return view('article', ['article' => Article::find($id)]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }
}
