<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Number;
use App\Models\Slider;
use App\Models\Sponser;
use App\Models\Review;
use App\Models\Greet;

use Mail;


class MainController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::where('published',1)->get();
        $data['aboutus'] = Page::findorFail(1);
        $data['lastnews'] = Post::paginate(4);
        $data['photos'] = Photo::Select('filename')->paginate(3);
        $data['videos'] = Video::Select('code')->paginate(2);
        $data['sponsers'] = Sponser::Select('image')->paginate(4);
        $data['number'] = Number::findorFail(1);
        $data['Reviews'] = Review::paginate(4);
        $data['greetings'] = Greet::paginate(4);
        return view('front.quran.main',compact('data'));
    }

    public function sendemail(Request $request)
    {
        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),

            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('dhhfsdsd@gmail.com', 'Admin')->subject('hello waleed');
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

    public function gallary()
    {
        $photos = Photo::paginate(5);
        return view('front.quran.gallary',compact('photos'));
    }

    public function sayabout()
    {
        $reviews = Review::paginate(5);
        return view('front.quran.sayabout',compact('reviews'));
    }
}
