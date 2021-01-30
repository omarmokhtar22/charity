<div class="view">
				@if($aboutus)
				<img alt class="bg" src="{{ asset('themes/front/at3am')}}/images/placeholders/1920x1200-0.jpg" />
				<img alt class="bg" src="{{ asset('themes/front/at3am')}}/images/placeholders/1920x1200-1.jpg" />
				<div class="content colors-e">
					<div class="container">
						<h2>{{$aboutus->title}}</h2>
						<p class="lead">{!! $aboutus->content !!}</p>
						@endif
						<div class="row">
							<div class="col-md-4  values">
								<div class="col-icon">
									<i class="li_bulb"></i>
								</div>
								<div class="col-content">
									<h4>{{$value->title}}</h4>
									<p>{!! $value->content !!}</p>	
								</div>
							</div>
							<div class="col-md-4 values2">
								<div class="col-icon">
									<i class="li_t-shirt"></i>
								</div>
								<div class="col-content">
									<h4>{{$mission->title}}</h4>
									<p>{!! $mission->content !!}</p>	
								</div>
							</div>
							<div class="col-md-4  values">
								<div class="col-icon">
									<i class="li_megaphone"></i>
								</div>

								<div class="col-content news">
									<h4>{{$vision->title}}</h4>
									<p>{!! $vision->content !!}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>