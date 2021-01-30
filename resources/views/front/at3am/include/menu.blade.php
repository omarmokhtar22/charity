<div class="ext-nav background-95-h page-transition">
           
           <div class="view half-height">
               <img alt class="bg static" src="{{ asset('themes/front/at3am')}}/images/placeholders/1920x1200-1.jpg" />
               <div class="content no-top-padding no-bottom-padding  full-height">
                   <div class="container-fluid  full-height">
                       <div class="row full-height">
                           <a href="blog.html" class="col-md-6 colors-e background-95-e full-height">
                               <div>
                                   <span class="side-label">All The Latest</span>
                                   <span class="side-title">Blog</span>
                               </div>
                           </a>
                           <a href="help.html" class="col-md-6 colors-f background-95-f full-height">
                               <div>
                                   <span class="side-label">Documentation</span>
                                   <span class="side-title">Help</span>
                               </div>
                           </a>
                       </div>
                   </div>
               </div>
           </div>
           <div class="container-fluid  half-height">
               <div class="row full-height">
                   <a href="#how-we-work" class="col-md-4 colors-g background-solid full-height border-bottom border-lite">
                       <div>
                           <span class="side-label">Awesome</span>
                           <span class="side-title">How We Work</span>
                       </div>
                   </a>
                   <a href="#who-we-are" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite">
                       <div>
                           <span class="side-label">We Are Designers</span>
                           <span class="side-title">Who We Are</span>
                       </div>
                   </a>
                   <a href="#numbers" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite">
                       <div>
                           <span class="side-label">Some Facts</span>
                           <span class="side-title">Our Numbers</span>
                       </div>
                   </a>
               </div>
           </div>
       </div>
       <div class="page-border bottom colors-e background-solid">
            <a href="#top" class="hover-effect">To <span class="highlight">Top</span></a>
        </div>
		<div class="page-border left colors-e background-solid">
			<ul>
				<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
				<li><a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
				<li><a href="http://www.skype.com/" target="_blank"><i class="fa fa-skype"></i></a></li>
			</ul>
        </div>
        
        <!-- BEGIN: Top menu -->
		<div class="page-border right colors-e background-solid"></div>
		<nav class="navbar navbar-default navbar-fixed-top colors-e background-solid" role="navigation" id="top-nav">
			<div class="container">
            <div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
                             <li><a href="/" class="hover-effect">الرئيسية</a></li>
                        @if($pages)
                            @foreach($pages as $page)
                            <li><a href="/pages/{{ $page->id}}/{{ $page->slug}}" >{{$page->title}}</a></li>
                            @endforeach
                        @endif

						<li><a href="#contact" class="hover-effect">اتصل بنا</a></li>
					
						<li class="hidden-xs"><a class="menu-toggle ext-nav-toggle" data-target=".ext-nav" href="#"><span></span></a></li>
					</ul>
				</div>
                <div class="navbar-header">
					<a class="menu-toggle ext-nav-toggle visible-xs-block" data-target=".ext-nav" href="#"><span></span></a>
					<a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
					<a class="navbar-brand" href=""><img src="{{ asset('themes/front/at3am/images/logo.jpg')}}" alt=""></span></a>
				</div>
				
			</div>
		</nav>
		<!-- END: Top menu -->