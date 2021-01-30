@extends('front.at3am.layout')
@section('content')
<!-- BEGIN: Page content -->
<section>

<div class="view">
    <div class="content small-top-padding colors-e background-90-e">
        <div class="container rtl">
            <div class="row">
                <div class="col-md-9">
                    @if($posts)
                    @foreach($posts as $post)
                    <div class="row post">
                        <div class="col-md-3 post-meta">
                            <div class="post-day">{{ $post->created_at->format('d') }}</div>
                            <div class="post-month">{{ $post->created_at->format('M Y') }}</div>
                        </div>
                        <div class="col-md-9">
                            <div class="post-body background-75-e">
                                <div class="post-image">
                                    <a class="page-transition" href="/news/view/{{$post->id}}">
                                        <img class="fluid-width imgsize" src="{{ asset('uploads/news/'.$post->image)}}" 
                                            alt="Another Post with Imag">
									</a>
                                </div>
                                <h3><a  href="/news/view/{{$post->id}}">{{ $post->title}}</a></h3>
                                {{ \Illuminate\Support\Str::limit($post->content, 200, $end='...') }}
                                <p><a href="/news/view/{{$post->id}}" class="post-read-more page-transition">المزيد</a></p>
                             
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="row">
                        <div class="text-center col-md-offset-3 col-md-9">
             
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</section>
<!-- END: Page content -->





@endsection