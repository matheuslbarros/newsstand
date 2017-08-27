<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article.index', ['articles' => $this->getArticles()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create', ['article' => new Article()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules());
        
        $article = new Article($request->only(['title', 'body', 'publish_date']));
        $article->user_id = Auth::id();
        $article->photo = $this->getPhotoFilename($request);
        $article->save();
        
        $request->file('photo')->move(public_path('/images/articles'), $article->photo);
        
        return redirect('/admin/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('article.show', ['article' => $this->getArticle($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = $this->getArticle($id);
        $article->delete();
        File::delete(public_path('/images/articles') . "/" . $article->photo);
        return redirect('/admin/articles');
    }
    
    /**
     * Get the article validation rules.
     *
     * @return array
     */
    private function rules()
    {
        return [
            'title' => 'required|max:255',
            'body' => 'required',
            'publish_date' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
    
    private function getPhotoFilename($request)
    {
        return uniqid() . '.' . $request->file('photo')->getClientOriginalExtension();
    }
    
    /**
     * Get articles
     * 
     * @return Article[]
     */
    private function getArticles()
    {
        return Article::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
    }

    /**
     * Get the article by id
     * 
     * @param int $id
     * @return Article
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    private function getArticle($id)
    {
        $article = Article::where('user_id', Auth::id())->where('id', $id)->first();
        
        if (!$article) {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException();
        }
        
        return $article;
    }
}
