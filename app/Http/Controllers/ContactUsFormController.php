<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsFormController extends Controller
{
    //
    public function createForm(Request $request) {
        return view('mail.contactClient');
      }
      // Store Contact Form data
      public function ContactUsForm(Request $request) {
          // Form validation
          $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
              'subject'=>'required',
              'message' => 'required',
           ],
        );
          //  Store data in database
          Contact::create($request->all());
          //
          \Mail::send('mail.mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('jerry.saintclou@gmail.com', 'Admin')->subject($request->get('subject'));
        });
          return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
      }
}
