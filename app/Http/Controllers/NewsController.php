<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class NewsController extends Controller
{
    public function index()
    {
        $posts= Post::Paginate(10);
        return view('front.at3am.news.index',compact('posts'));
    }

    public function view(Post $post)
    {
        return view('front.at3am.news.view',compact('post'));
    }
}
