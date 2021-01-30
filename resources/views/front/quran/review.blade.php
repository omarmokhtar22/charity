@extends('front.quran.layout')
@section('content')
<div class="carousel-inner">
							
							@foreach($data['Reviews'] as $review)
							
							<div>
								<div class=" d-flex mt-5 mb-5 mb-4 pt-5 slider__item">
									<div class="round-wrap">
										<div class="round-animation"><img alt="" src="{{ asset('uploads/reviews/'.$review->image)}}"></div>
									</div>
									<div class="news__title">
										<span>"</span>
										<p>{!! $review->content !!}</p><span class="float-left">"</span>
										<div class="shackname">
										{{ $review->title }}
											
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
@endsection