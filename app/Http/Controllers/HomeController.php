<?php



namespace App\Http\Controllers;

Use Auth;
use App\Article;
Use App\User;
Use App\Booking;
use Illuminate\Http\Request;

use App\Post;



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

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $articles = Article::where('user_id', auth()->id())->get();

        //$bookings = Booking::where('articles.user_id', auth()->id());
        $bookings = Auth::user()->bookings;

        $sentBookings = Booking::where('user_id', auth()->id())->get();


        $user = User::all();

        return view('home', compact(['articles', 'bookings', 'user', 'sentBookings']));
    }



    public function posts()

    {

        $posts = Post::all();

        return view('posts',compact('posts'));

    }



    public function show($id)

    {


    }

}
