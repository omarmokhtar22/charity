<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PagesController extends Controller
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
    public function index(Page $page)
    {
        $this->authorize('viewAny',  $page);
        $pages = Page::OrderBy('id','desc')->paginate(15);
        return view('admin.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Page $page)
    {
        $this->authorize('create',  $page); 
        $pages = Page::where('parent_id',0)->where('menu',1)->with('childrenPages')->get();
        return view('admin.pages.create',compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Page::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'published'=> $request->boolean('published'),
            'menu'=> $request->boolean('menu'),
            'parent_id' => $request->parent_menu,
            'level' => $this->getlevel($request->parent_menu),
            'order' => $request->order,
            'slug' => Str::slug($request->title,'-'),

        ]);
        return redirect('/admin/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //dd($page->parent_id);
        $this->authorize('update',  $page); 
        $pages = Page::where('parent_id',0)->where('menu',1)->with('childrenPages')->get();
        return view('admin.pages.edit',compact('page','pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->update([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'published'=> $request->boolean('published'),
            'menu'=> $request->boolean('menu'),
            'parent_id' => $request->parent_menu,
            'level' => $this->getlevel($request->parent_menu),
            'order' => $request->order,
            'slug' => Str::slug($request->title,'-'),
        ]);
        return redirect('/admin/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->back();
    }

    function getlevel($id)
    {
        if($id != 0)
        {
            $page = Page::findorfail($id);
            $level = $page->level+1;
        }
        else
        {
            $level = 1;
        }
        return $level;
        
    }
}
