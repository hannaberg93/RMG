<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $booking = new Booking();

        $booking->article_id = $request->article_id;
        $booking->message = $request->message;
        $booking->date_start = $request->date_start;
        $booking->date_end = $request->date_end;
        $booking->user_id = Auth::user()->id;

        $booking->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        $date = $booking->created_at->locale('sv');
        return view('/bookings/show', compact(['booking', 'date']));
    }
}
