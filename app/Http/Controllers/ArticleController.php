<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

	protected $validation_rules = [
		'title' => 'required|min:5',
        'desc' => 'required|min:5',
        'price_per_hour' => 'required|min:1',
        'price_per_day' => 'required|min:1',
        'price_per_week' => 'required|min:1',
	];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $categorys = Category::all();


        return view('articles/index', compact(['articles', 'categorys']));
    }

    /**
     * Filters the index view by category id
     *
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {
        $articles = Article::all()->where('category_id', $id);
        $categorys = Category::all();


        return view('articles/index', compact(['articles', 'categorys']));
        echo $id;die;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        $categorys = Category::all();

        return view('articles/create', compact(['articles', 'categorys']));
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
        $article->category_id = $request->category_id;
        $article->city = $request->city;
        $article->images_url = $request->images_url;
        $article->user_id = Auth::user()->id;

        //dd($article->user_id);

        $article->save();

        return redirect('/articles/' . $article->id)->with('status', 'Artikeln skapades');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $date = \Carbon\Carbon::parse($article->created_at)->locale('sv');
        return view('/articles/show', compact(['article', 'date']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('/articles/edit', compact('article'));
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
        $validData = $request->validate($this->validation_rules);

		$article->title = $validData['title'];
        $article->desc = $validData['desc'];
        $article->price_per_hour = $validData['price_per_hour'];
        $article->price_per_day = $validData['price_per_day'];
        $article->price_per_week = $validData['price_per_week'];
		$article->save();

		return redirect('/articles/' . $article->id . '/edit')->with('status', 'Artikeln är uppdaterad!');

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
        return redirect('/articles')->with('status', 'Artikeln raderad!');
    }
}
