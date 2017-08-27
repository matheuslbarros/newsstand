<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['articles' => $this->getLastTenArticles()]);
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
     * Export the article as pdf.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        $article = Article::findOrFail($id);
        $pdf = PDF::loadView('download', ['article' => $article]);
        return $pdf->download(str_slug($article->title) . '.pdf');
    }

    /**
     * Show the last 10 news formatted by rss.
     *
     * @return \Illuminate\Http\Response
     */
    public function rss()
    {
        $content = view('rss', ['articles' => $this->getLastTenArticles()]);
        return response($content)->header('Content-Type', 'text/xml');
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
    
    private function getLastTenArticles() {
        return Article::where([])->take(10)->get();
    }
}
