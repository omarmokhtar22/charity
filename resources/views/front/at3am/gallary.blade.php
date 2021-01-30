<section id="work">
			<div class="view">
                <img alt class="bg" src="{{ asset('themes/front/at3am')}}/images/placeholders/1920x1200-2.jpg" />
                <img alt class="bg" src="{{ asset('themes/front/at3am')}}/images/placeholders/1920x1200-0.jpg" />
				<div class="content no-bottom-padding colors-e">

					<div class="gallery background-e" data-default-group="all" data-overlay=".gallery-overlay">
						<div class="container-fluid">
							<div class="row">
								<div class="grid">
								@if($photos)
									@foreach($photos as $photo)
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["design"]'>
										<a href="#!portfolio-item-1.html" class="hover-overlay">
											<img alt="Project 1" src="{{ asset('uploads/photos/'.$photo->filename)}}" style="width:369px; height:295px;" />
											<div class="overlay background-90-e">
												<div class="hidden-xs">
													<p class="title heading-e">Image</p>
													<p class="text-center heading-e"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-picture-o heading-e"></i></p>
												</div>
											</div>
										</a>
									</div>
									@endforeach
									@endif
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>