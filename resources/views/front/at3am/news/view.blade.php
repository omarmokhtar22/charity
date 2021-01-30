@extends('front.at3am.layout')
@section('content')
<!-- BEGIN: Page content -->
<section>

<div class="view">
    <div class="content small-top-padding colors-e background-90-e">
        <div class="container rtl">
            <div class="row">
                <div class="col-md-12">
                    @if($post)
                  
                    <div class="row post">
                       
                        <div class="col-md-9">
                            <div class="post-body background-75-e">
                                <div class="post-image">
                                    <a class="page-transition" href="blog-single-4.html">
                                        <img class="fluid-width" src="{{ asset('uploads/news/'.$post->image)}}" 
                                            alt="Another Post with Imag">
									</a>
                                </div>
                                <h3><a class="page-transition " href="blog-single-3.html">{{ $post->title}}</a></h3>
                                <div class="newsbody"> {!! $post->content !!} </div>
                                
                             
                            </div>
                        </div>
                        <div class="col-md-3 post-meta">
                            <div class="post-day">{{ $post->created_at->format('d') }}</div>
                            <div class="post-month">{{ $post->created_at->format('M Y') }}</div>
                        </div>
                    </div>
                    
                    @endif
                  
                </div>
                
            </div>
        </div>
    </div>
</div>
</section>
<!-- END: Page content -->





@endsection