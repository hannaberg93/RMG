<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    protected $validation_rules = [
        'title' => 'required|min:3',
        'desc' => 'required|min:5',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('articles/index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validData = $request->validate($this->validation_rules);

        $article = new Article();

        $article->title = $validData['title'];
        $article->desc = $validData['desc'];
        $article->price_per_hour = $request->price_per_hour;
        $article->price_per_day = $request->price_per_day;
        $article->price_per_week = $request->price_per_week;
        $article->images_url = $request->images_url;

        $article->save();

        return redirect('/articles/' . $article->id)->with('status', 'Artikeln skapades');;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $location = $article->location;

        return view('/articles/show', ['article' => $article, 'location' => $location]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('/articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->update(request(['title', 'desc']));

        return view('/articles.edit', ['article' => $article]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/articles');
    }
}
