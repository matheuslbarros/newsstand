<?php

namespace App\Http\Controllers;

use App\Article;
use PDF;

class NewsController extends Controller
{
    
    /**
     * Show the article by id.
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('news.show', ['article' => $article]);
    }

    /**
     * Export the article as pdf.
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     */
    public function download(Article $article)
    {
        $pdf = PDF::loadView('news.download', ['article' => $article]);
        return $pdf->download(str_slug($article->title) . '.pdf');
    }

}
