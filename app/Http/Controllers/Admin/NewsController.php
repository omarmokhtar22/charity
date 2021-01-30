<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
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
    public function index(Post $news)
    {
        $this->authorize('viewAny',  $news);
        $posts = Post::OrderBy('id','desc')->paginate(15);
        return view('admin.news.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $news)
    {
        $this->authorize('create',  $news);
        return view('admin.news.create');
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
        $picture->move('uploads/news/',$picture_new_name);
        Post::create([
            'title'=> $request->title,
            'image' =>$picture_new_name,
            'content'=> $request->content,
            'user_id' => Auth::user()->id,
            'published'=>$request->boolean('published'),
        ]);
        return redirect('/admin/news');
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
    public function edit(Post $news)
    {
        $this->authorize('update', $news);     
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $news)
    {
        if($request->pimage)
        {
            $picture = $request->pimage;
            $picture_new_name= time().$picture->getClientOriginalName();
            $picture->move('uploads/news/',$picture_new_name);
        }
        
        
            $news->title = $request->title;
            if($request->pimage) $news->image = $picture_new_name;
            $news->content = $request->content;
            $news->user_id = Auth::user()->id;
            $news->published= $request->boolean('published');
            $news->save();
        
        return redirect('/admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $news)
    {
        $this->authorize('delete',  $news);
        $news->delete();
        return redirect('/admin/news');
    }
}
