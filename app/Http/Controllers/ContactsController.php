<?php

namespace App\Http\Controllers;
 use App\Mail\ContactMessageCreated;
 use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
   public function create()
   {
     return view('contacts.create');
   }

   public function store(ContactRequest $request)
   {
   	$mailable = new ContactMessageCreated($request->name, $request->email, $request->message);
   	Mail::to('admin@laradev.com')->send($mailable);
     
     return 'Done!';
   }
}
