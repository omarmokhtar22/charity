    	<!-- start sayabout -->
        <div class="sayabout">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>قالو عنا</h1>
					<p>بعض من مقالات العلماء والمشايخ الذين قامو بزيارة الجمعية</p>
					<div class="carousel slide" data-ride="carousel" id="sayabout">
						<div class="carousel-inner">
							<?php $r=0; ?>
							@foreach($data['Reviews'] as $review)
							<?php $r++; ?>
							<div class="carousel-item @if($r == 1) active @endif">
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
					</div><a class="btn orange_btn animate__animated animate__fadeInLeft animate__slow mt-5 float-left" href="/reviews">المزيد من المقالات</a>
				</div>
			</div>
		</div>
    </div>