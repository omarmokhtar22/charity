@extends('front.at3am.layout')
@section('content')
<!-- BEGIN: Page content -->
<section>

<div class="view">
    <div class="content small-top-padding colors-e background-90-e">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    @if($page)
                  
                    <div class="row post">
                       
                        <div class="col-md-9">
                            <div class="post-body background-75-e">
                          
                                <h3><a class="page-transition" href="blog-single-3.html">{{ $page->title}}</a></h3>
                                {!! $page->content !!}
                                
                             
                            </div>
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