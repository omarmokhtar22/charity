<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Greet;
use Illuminate\Support\Facades\Auth;

class GreetingsController extends Controller
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
        $greetings = Greet::OrderBy('id','desc')->paginate(15);
        return view('admin.greetings.index',compact('greetings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.greetings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $picture = $request->pimage;
        $picture_new_name= time().$picture->getClientOriginalName();
        $picture->move('uploads/greetings/',$picture_new_name);
        Greet::create([
            'title'=> $request->title,
            'image' =>$picture_new_name,
            'content'=> $request->content,
        ]);
        return redirect('/admin/greetings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Greet $greeting)
    {   
        return view('admin.greetings.edit',compact('greeting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Greet $greeting)
    {
        if($request->pimage)
        {
            $picture = $request->pimage;
            $picture_new_name= time().$picture->getClientOriginalName();
            $picture->move('uploads/greetings/',$picture_new_name);
        }
        
        
            $greeting->title = $request->title;
            if($request->pimage) $greeting->image = $picture_new_name;
            $greeting->content = $request->content;
            $greeting->save();
        
        return redirect('/admin/greetings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Greet $greeting)
    {
        $greeting->delete();
        return redirect('/admin/$greetings');
    }
}
