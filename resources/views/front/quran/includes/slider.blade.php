<div class="hero">
		<div class="carousel slide" data-ride="carousel" id="hero__carousal">
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#hero__carousal"></li>
				<li data-slide-to="1" data-target="#hero__carousal"></li>
				<li data-slide-to="2" data-target="#hero__carousal"></li>
			</ol>
			<div class="carousel-inner">
				<?php $i=0; ?>
				@foreach($data['sliders'] as $slider)
				 <?php $i++ ?>
				<div class="carousel-item @if($i == 1) active @endif">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="carousel-caption d-none d-md-block">
									<h2 class="animate__animated animate__fadeInRight">{{ $slider->title }}</h2>
									<p class="animate__animated animate__fadeInRight animate__delay-1s">{{ $slider->body }}</p>
								</div>
							</div>
						</div>
					</div>
					<div class="overlay"></div>
					<img alt="First slide" class="d-block w-100" src="{{ asset('uploads/slider/'.$slider->photo)}}">
				</div>
				@endforeach
			</div>
		</div>
		<div class="scrollDown">
			<a href="#"><img alt="scroll-down" src="{{ asset('themes/front/quran')}}/images/scroll.png"></a>
		</div>
		<div class="bg__image"><img src="{{ asset('themes/front/quran')}}/images/herowave.svg"></div>
	</div>