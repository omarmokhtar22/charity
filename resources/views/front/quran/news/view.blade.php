@extends('front.quran.layout_pages')
@section('content')
<div class="intenal_hero">
		<div class="container page_title animate__animated animate__fadeInRight animate__slow animate__delay-4s pr-3 mt-2">
			<div class="row">
				<div class="col">
					<h1>عنوان الصفحة</h1>
					<div class="breadcrumbcustom">
						<a href="">الرئيسية</a> | <a class="active" href="">{{ $post->title}}</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end pageheader section -->
	<!-- start pagecontnent -->
	<div class="container">
		<div class="pagesContent">
			<div class="newsarchive row">
				<div class="col">
					<div class="carousel slide" data-ride="carousel" id="innernewscarousal">
						<div class="carousel-inner">
							<div class="carousel-item active"><img alt="First slide" class="d-block w-100" src="{{ asset('uploads/news')}}/{{$post->image}}"></div>

						</div>
                        <a class="carousel-control-prev" data-slide="prev" href="#innernewscarousal" role="button">
                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a> 
                        <a class="carousel-control-next" data-slide="next" href="#innernewscarousal" role="button">
                            <span aria-hidden="true" class="carousel-control-next-icon"></span> 
                            <span class="sr-only">Next</span>
                        </a>
					</div>
					<div class="newsdate">
                    {{ $post->created_at}}
					</div>
					<p class="news__detailsP">{!! $post->content !!}</p>
				</div>
			</div>
		</div>
	</div><!-- end pagecontnent -->
@endsection