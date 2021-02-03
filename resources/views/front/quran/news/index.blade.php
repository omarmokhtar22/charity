@extends('front.quran.layout_pages')
@section('content')
<!-- start pageheader section -->
	<div class="intenal_hero">
		<div class="container page_title animate__animated animate__fadeInRight animate__slow animate__delay-4s pr-3 mt-2">
			<div class="row">
				<div class="col">
					<h1>أرشيف الاخبار</h1>
					<div class="breadcrumbcustom">
						<a href="">الرئيسية</a> | <a class="active" href="">أرشيف الاخبار</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end pageheader section -->
	<!-- start pagecontnent -->
	<div class="container">
		<div class="pagesContent">
			<div class="newsarchive row">
                @foreach($posts as $post)
				<div class="col-md-4 col-sm-12">
					<div class="card">
						<img alt="Card image cap" class="card-img-top" src="{{ asset('uploads/news')}}/{{$post->image}}">
						<div class="card-body">
							<h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">
                            {!! Str::words($post->content, 2, ' ...') !!}
                            </p>
                            <a class="btn orange_btn" href="#">التفاصيل</a>
						</div>
					</div>
                </div>
                @endforeach
			</div>
			<hr>
			<div class="Pagination">
            {{ $posts->links() }}
				
			</div>
		</div>
    </div>
    <!-- end pagecontnent -->
	@endsection