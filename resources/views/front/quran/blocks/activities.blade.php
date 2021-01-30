    <!-- start Activeties -->
	<div class="Activeties">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<div class="charityActivety">
						<div class="carousel slide" data-ride="carousel" id="charityActivety">
							<ol class="carousel-indicators">
								<li class="active" data-slide-to="0" data-target="#charityActivety"></li>
								<li data-slide-to="1" data-target="#charityActivety"></li>
								<li data-slide-to="2" data-target="#charityActivety"></li>
							</ol>
							<div class="carousel-inner">
								<?php $g=0; ?>
								@foreach($data['greetings'] as $greet)
								<?php $g++; ?>
								<div class="carousel-item @if($g == 1) active @endif">
									<img alt="First slide" class="d-block w-100" src="{{ asset('uploads/greetings/'. $greet->image)}}">
									<div class="carousel-caption d-flex align-items-center justify-content-between">
										<h5>{{ $greet->title }}</h5>
										<a class="btn orange_btn animate__animated animate__fadeInLeft animate__slow" href="">المزيد</a>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="charityActivety twitterwed">
						<blockquote class="twitter-tweet">
						<a class="twitter-timeline" data-lang="ar" data-width="300" data-height="400" href="https://twitter.com/t7ber?ref_src=twsrc%5Etfw">Tweets by t7ber</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>	
						</blockquote>
						<script async charset="utf-8" src="https://platform.twitter.com/widgets.js">
						</script> <a class="btn orange_btn mt-2 mb-2 animate__animated animate__fadeInLeft animate__slow" href="">تابعنا علي تويتر</a>
					</div>
				</div>
			</div>
		</div>
    </div><!-- end Activeties -->