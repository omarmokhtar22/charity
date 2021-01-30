<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class TestController extends Controller
{
    public function menu()
    {
        $pages = Page::where('parent_id',0)
        ->with('childrenPages')
        ->get();
         return view('test', compact('pages'));
    }

    
}
