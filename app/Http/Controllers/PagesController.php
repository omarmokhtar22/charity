<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function index($id,$slug)
    {
        $page = Page::findorfail($id);
        return view('front.at3am.page',compact('page'));
    }
}
