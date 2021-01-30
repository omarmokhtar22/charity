<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::findorfail(1);
        return view('admin.contacts.index',compact('contact'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
        $number = Contact::findorfail(1);
        $number->Update([
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'telegram' => $request->telegram,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'map' => $request->map,
        ]);
        return redirect()->back();
    }

}
