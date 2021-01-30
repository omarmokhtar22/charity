<div id="loader-wrapper">
		<lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_czmjkzqg.json" class=" animate__animated animate__fadeInDown animate__slow lottiepreloader"   background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
	</div>
<header class="main-portal-header">
		<div class="container">
			<div class="row align-items-center d-flex justify-content-between">
				<div class="col-md-3 col-sm-12 portal-logo animate__animated animate__fadeInDown animate__slow animate__delay-3s">
					<a href="#"><img alt="ee" src="{{ asset('uploads/'.$shareddata['contact']->logo)}}"></a>
				</div>
				<div class="col-md-9 col-xs-12 left__area portal-logo animate__animated animate__fadeInLeft animate__slow  animate__delay-4s">
					<div class="socialmediaTop">
						<a href="{{ $shareddata['contact']->map}}" title=""><i aria-hidden="true" class="fa fa-map-marker"></i></a> 
						<a href="{{ $shareddata['contact']->facebook}}" title=""><i aria-hidden="true" class="fa fa-facebook"></i></a> 
						<a href="{{ $shareddata['contact']->twitter}}" title=""><i aria-hidden="true" class="fa fa-twitter"></i></a>
						 <a href="{{ $shareddata['contact']->youtube}}" title=""><i aria-hidden="true" class="fa fa-youtube"></i></a> 
						 <a href="{{ $shareddata['contact']->telegram}}" title=""><i aria-hidden="true" class="fa fa-snapchat-ghost"></i></a> 
						 <a class="whatsapp" href="https://api.whatsapp.com/send?phone={{ $shareddata['contact']->map}}" title=""><i aria-hidden="true" class="fa fa-whatsapp"></i></a>
					</div>
					<div class="topMenu" title="القائمة الرئيسية">
						<i aria-hidden="true" class="fa fa-bars"></i>
					</div>
					<div class="openmenu animate__animated animate__fadeInDown ">
						<ul>
						<li class="menu__li">
								<a class="" href=""><i aria-hidden="true" class="fa fa-arrow-left"></i> الصفحة الرئيسية</a>
						</li>
						@if($shareddata['menus'])
							@foreach($shareddata['menus'] as $menu)	
							<li class="menu__li">
								<a class="" href="/pages/{{ $menu->id}}/{{ $menu->slug}}"><i aria-hidden="true" class="fa fa-arrow-left"></i> {{ $menu->title}}</a>
							</li>
							@endforeach
						@endif
						</ul>
					</div><a class="vision" href="https://www.vision2030.gov.sa/" title="الروية"><img src="{{ asset('themes/front/quran')}}/images/vision.png"></a>
				</div>
			</div>
		</div>
	</header>