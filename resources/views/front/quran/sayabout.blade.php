@extends('front.quran.layout_pages')
@section('content')
<div class="intenal_hero">
		<div class="container page_title animate__animated animate__fadeInRight animate__slow animate__delay-4s pr-3 mt-2">
			<div class="row">
				<div class="col">
					<h1>عنوان الصفحة</h1>
					<div class="breadcrumbcustom">
						<a href="">الرئيسية</a> | <a class="active" href="">عنوان الصفحة</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end pageheader section -->
	<!-- start pagecontnent -->
	<div class="container">
		<div class="pagesContent">
			<div class="newsarchive">
                @foreach($reviews as $review)
				<div class="col-sm-12">
					<div class=" d-flex mt-5 mb-5 mb-4 pt-5">
						<div class="round-wrap">
							<div class="round-animation"><img alt="" src="{{ asset('uploads/reviews/'.$review->image)}}"></div>
						</div>
						<div class="news__title">
							<span>"</span>
							<p>{!! $review->content !!} </p><span class="float-left">"</span>
							<div class="shackname">
								{{ $review->title}}
							</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
			<hr>
			<div class="Pagination">
                {{ $reviews->links()}}
				
			</div>
		</div>
	</div><!-- end pagecontnent -->

@endsection