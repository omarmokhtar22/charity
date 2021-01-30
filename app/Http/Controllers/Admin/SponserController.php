<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Sponser;
use Illuminate\Support\Facades\Auth;

class SponserController extends Controller
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
        $sponsers = Sponser::OrderBy('id','desc')->paginate(15);
        return view('admin.sponser.index',compact('sponsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sponser.create');
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
        $picture->move('uploads/sponser/',$picture_new_name);
        Sponser::create([
            'title'=> $request->title,
            'image' =>$picture_new_name,
            'url'=> $request->url,
        ]);
        return redirect('/admin/sponsers');
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
    public function edit(Sponser $sponser)
    {     
        return view('admin.sponser.edit',compact('sponser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponser $sponser)
    {
        if($request->pimage)
        {
            $picture = $request->pimage;
            $picture_new_name= time().$picture->getClientOriginalName();
            $picture->move('uploads/sponser/',$picture_new_name);
        }
        
        
            $sponser->title = $request->title;
            if($request->pimage) $sponser->image = $picture_new_name;
            $sponser->url = $request->url;
            $sponser->save();
        
        return redirect('/admin/sponsers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponser $sponser)
    {
        $sponser->delete();
        return redirect('/admin/sponsers');
    }
}
