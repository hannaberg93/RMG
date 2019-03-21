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
        $articles = Auth::user()->articles;

        $bookings = Auth::user()->bookings;

        $sentBookings = Auth::user()->sentBookings;

        $user = User::all();

        return view('home', compact(['articles', 'bookings', 'user', 'sentBookings']));
    }


}
