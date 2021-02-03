<div class="mediaCenter">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>المركز الأعلامي</h1>
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a aria-controls="news" aria-selected="true" class="nav-link active" data-toggle="tab" href="#news" id="news-tab" role="tab">الاخبار</a>
						</li>
						<li class="nav-item">
							<a aria-controls="photo" aria-selected="false" class="nav-link" data-toggle="tab" href="#photo" id="photo-tab" role="tab">الصور</a>
						</li>
						<li class="nav-item">
							<a aria-controls="contact" aria-selected="false" class="nav-link" data-toggle="tab" href="#video" id="video-tab" role="tab">الفيديو</a>
						</li>
					</ul>
					<div class="tab-content mt-5" id="myTabContent">
						<!-- news -->
						<div aria-labelledby="news-tab" class="tab-pane fade show active" id="news" role="tabpanel">
							<div class="carousel slide" data-ride="carousel" id="news__carousal">
								<div class="carousel-inner">
                                 
                                    <div class="carousel-item  active ">
										<?php $i=0 ?>
									@foreach($data['lastnews'] as $news)
			
										<div class=" d-flex slider__item">
											<img alt="First slide" class="" src="{{ asset('uploads/news')}}/{{$news->image}}">
											<div class="news__title">
                                                <p>{{$news->title}}</p>
                                                <a class="btn green_btn animate__animated animate__fadeInDown animate__slow" href="/news/view/{{ $news->id}}">تفاصيل الخبر</a>
											</div>
										</div>
										<?php $i++ ?>
										@if($i ==2)
										</div>
										<div class="carousel-item">	
										@elseif($i == 4)
										
										</div>		
										@endif
										
                                    @endforeach 
                                    
                                  
                                </div>       
                            <a class="carousel-control-prev" data-slide="prev" href="#news__carousal" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a>
                             <a class="carousel-control-next" data-slide="next" href="#news__carousal" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
							</div><a class="btn orange_btn animate__animated animate__fadeInLeft animate__slow mt-5 float-left" href="/news">ارشيف الاخبار</a>
                        </div>
                        <!--end news -->
						<div aria-labelledby="photo-tab" class="tab-pane fade" id="photo" role="tabpanel">
							<!-- news -->
							<div aria-labelledby="news-tab" class="tab-pane fade show active" id="news" role="tabpanel">
								<div class="carousel slide" data-ride="carousel" id="photo__carousal">
									<div class="carousel-inner">
										<div class="carousel-item active">
                                            <div class=" slider__item d-flex">
												<?php $p=0 ?>
                                                @foreach($data['photos'] as $photo)
												<img alt="First slide" class="photo__img" src="{{ asset('uploads/photos/'.$photo->filename)}}">
												<?php $p++ ?>
												
												@if($p == 3 )
													</div>
													</div>
													<!-- 
														<div class="carousel-item">
                                           			<div class=" slider__item d-flex">
													-->	
												@elseif($p == 6)
												</div>
												</div> 
												@endif
                                                @endforeach 
                                       

                                    </div>
                                    <a class="carousel-control-prev" data-slide="prev" href="#photo__carousal" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#photo__carousal" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
								</div>
								<a class="btn orange_btn animate__animated animate__fadeInLeft animate__slow mt-5 float-left" href="/gallary">ارشيف الصور</a>
							</div><!--end news -->
						</div>
						<div aria-labelledby="video-tab" class="tab-pane fade" id="video" role="tabpanel">
							<div class="carousel slide" data-ride="carousel" id="video__carousal">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class=" slider__item d-flex">
											<?php $v=0 ?>
                                            @foreach($data['videos'] as $video)
                                            <iframe allowfullscreen frameborder="0" height="315" src="{{ $video->code}}" width=""></iframe> 
											<?php $v++ ?>
											
											@if($v == 2 )
											</div>
											</div>
											<div class="carousel-item active">
											<div class=" slider__item d-flex">
											@elseif($v == 4 )
											</div>
											</div>
											@endif
											@endforeach
									
								</div><a class="carousel-control-prev" data-slide="prev" href="#video__carousal" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#video__carousal" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
							</div><a class="btn orange_btn animate__animated animate__fadeInLeft animate__slow mt-5 float-left" href="">قناة الجمعية علي يوتيوب</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- <div class="bg__image"><img src="{{ asset('themes/front/quran')}}/images/mediacenter.svg"></div> -->
    </div>