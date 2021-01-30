<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
class ReviewsController extends Controller
{
    public function index()
    {
        $data['Reviews'] = Review::paginate(4);
        return view('front.quran.review',compact("data"));
    }
}
