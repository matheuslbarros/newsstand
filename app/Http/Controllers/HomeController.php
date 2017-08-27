<?php

namespace App\Http\Controllers;

use App\Article;

class HomeController extends Controller
{

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
        return Article::where([])->orderBy('id', 'desc')->take(10)->get();
    }

}
