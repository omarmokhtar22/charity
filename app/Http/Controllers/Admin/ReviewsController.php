<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
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
        $reviews = Review::OrderBy('id','desc')->paginate(15);
        return view('admin.reviews.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $picture = $request->pimage;
        $picture_new_name= time().$picture->getClientOriginalName();
        $picture->move('uploads/reviews/',$picture_new_name);
        Review::create([
            'title'=> $request->title,
            'image' =>$picture_new_name,
            'content'=> $request->content,
            'user_id' => Auth::user()->id,
            'published'=>$request->boolean('published'),
        ]);
        return redirect('/admin/reviews');
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
    public function edit(Review $review)
    {   
        return view('admin.reviews.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Review $review)
    {
        if($request->pimage)
        {
            $picture = $request->pimage;
            $picture_new_name= time().$picture->getClientOriginalName();
            $picture->move('uploads/reviews/',$picture_new_name);
        }
        
        
            $review->title = $request->title;
            if($request->pimage) $review->image = $picture_new_name;
            $review->content = $request->content;
            $review->user_id = Auth::user()->id;
            $review->published= $request->boolean('published');
            $review->save();
        
        return redirect('/admin/reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/admin/reviews');
    }
}
