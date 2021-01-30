<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.images');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadimage(Request $request)
    {
       //dd($request->file('photo'));
        if ($request->hasFile('photo')) {
            /*$photo = $request->file('photo');

            $fileName = time() . "." . $photo->getClientOriginalExtension();
            $request->file('photo')->move('uploads/images/', $fileName);
            //$user->update(['photo' => $fileName]);*/
            foreach($request->file('photo') as $file)
            {
                $name = time().'.'.$file->getClientOriginalName();
                $file->move('uploads/images/', $name);  
                $data[] = $name;  
            }
            return ['success'=>true,'message'=>'Successfully updated','filename'=>$data];
        }
        else{
            
            return ['success'=>true,'message'=>'no file'];
        }

        
    }

    public function deleteimg(Request $request)
    {
        //dd($request->photo);
        if(\File::exists(public_path('uploads/images/'.$request->photo))){

            \File::delete(public_path('uploads/images/'.$request->photo));
            return 'ok';
        
          }else{
        
            return 'no';
        
          }
    }
}
