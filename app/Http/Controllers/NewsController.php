<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $posts= Post::Paginate(2);
        return view('front.quran.news.index',compact('posts'));
    }

    public function view(Post $post)
    {
        return view('front.quran.news.view',compact('post'));
    }
}
