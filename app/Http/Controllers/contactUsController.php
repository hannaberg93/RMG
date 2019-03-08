<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;
class ContactUSController extends Controller
{
   public function contactUS()
{
return view('contactUS');
} 
   /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
   public function contactUSPost(Request $request) 
   {
    $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
    ContactUS::create($request->all()); 
   
    Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('message')
       ), function($message)
   {
       $message->to('rentmyg@gmail.com', 'Admin')->subject('Contact message from rentmygear.test');
   });
    return back()->with('success', 'Thanks for contacting us!'); 
   }
}