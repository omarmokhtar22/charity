<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
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
    public function index(Slider $slider)
    {
        $this->authorize('viewAny',  $slider);
        $sliders = Slider::OrderBy('id','desc')->paginate(15);
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Slider $slider)
    {
        $this->authorize('create',  $slider);
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $picture = $request->pimage;
        $picture_new_name= time().$picture->getClientOriginalName();
        $picture->move('uploads/slider/',$picture_new_name);
        Slider::create([
            'title'=> $request->title,
            'photo' =>$picture_new_name,
            'user_id' => Auth::user()->id,
            'body' => $request->body,
            'published'=>$request->boolean('published'),
        ]);
        return redirect('/admin/slider');
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
    public function edit(Slider $slider)
    {
        $this->authorize('update', $slider);
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if($request->pimage)
        {
            $picture = $request->pimage;
            $picture_new_name= time().$picture->getClientOriginalName();
            $picture->move('uploads/slider/',$picture_new_name);
        }
        
        
             $slider->title = $request->title;
            if($request->pimage) $slider->photo = $picture_new_name;
            $slider->user_id = Auth::user()->id;
            $slider->body = $request->body;
            $slider->published= $request->boolean('published');
            $slider->save();
        
        return redirect('/admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $this->authorize('delete',  $slider);
        $slider->delete();
        return redirect('/admin/slider');
    }
}
