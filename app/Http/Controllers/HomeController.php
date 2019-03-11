<?php

namespace App\Http\Controllers;

Use Auth;
use App\Article;
Use App\User;
Use App\Booking;
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
        $articles = Article::where('user_id', auth()->id())->get();

        //  bookings = articles->bookings

        $bookings = Booking::where('articles.user_id', auth()->id());


        $user = User::all();

        return view('home', compact(['articles', 'bookings', 'user']));
    }
}
