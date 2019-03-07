<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    protected $validation_rules = [
        'title' => 'required|min3',
        'desc' => 'required|min5',
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
        
        $validData = $request->validate([
            'title' => 'required|min3',
            'desc' => 'required',
            'price_per_hour' => 'required',
            'price_per_day' => 'required',
            'price_per_week' => 'required'
        ]);

        $article = new Article();

        $article->title = $validData['title'];
        $article->desc = $validData['desc'];
        $article->price_per_hour = $validData['price_per_hour'];
        $article->price_per_day = $validData['price_per_day'];
        $article->price_per_week = $validData['price_per_week'];
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
