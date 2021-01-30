<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;

class PhotosController extends Controller
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
    public function index(Photo $photo)
    {
        $this->authorize('viewAny',  $photo);
        $photos = Photo::Paginate(15);
        return view('admin.photos.index',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Photo $photo)
    {
        $this->authorize('create',  $photo);
        return view('admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Photo $photo)
    {
        $this->authorize('update',  $photo);
        return view('admin.photos.edit',compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        request()->validate([

            'photo' => 'required',

        ]);
        $picture = $request->photo;
        $imageName = time(). $picture->getClientOriginalName();

        $picture->move('uploads/photos/', $imageName);

            $photo->filename=$imageName;
            $photo->user_id=Auth::user()->id;
            $photo->save();
            return redirect('/admin/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $this->authorize('delete',  $photo);
        $photo->delete();
        return redirect()->back();
    }

    public function imagesUploadPost(Request $request)

    {
        
        request()->validate([

            'uploadFile' => 'required',

        ]);


        $images = [];
        foreach ($request->file('uploadFile') as $key => $value) {

            $imageName = time(). $key . '.' . $value->getClientOriginalExtension();

            $value->move('uploads/photos/', $imageName);
            $photo = new Photo;
            $photo->filename=$imageName;
            $photo->user_id=Auth::user()->id;
            $photo->save();
            $images[]=$imageName;
        }
        



        return response()->json(['success'=>$images]);

    }
}
