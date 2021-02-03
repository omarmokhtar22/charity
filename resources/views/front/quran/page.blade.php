@extends('front.quran.layout_pages')
@section('content')
<div class="intenal_hero">
		<div class="container page_title animate__animated animate__fadeInRight animate__slow animate__delay-4s pr-3 mt-2">
			<div class="row">
				<div class="col">
					<h1>{{ $page->title}}</h1>
					<div class="breadcrumbcustom">
						<a href="">الرئيسية</a> | <a class="active" href="">{{ $page->title}}</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end pageheader section -->
	<!-- start pagecontnent -->
	<div class="container">
		<div class="pagesContent">
			<div class="newsarchive blankpage">
				<div class="col-sm-12">

					<h3 > {{ $page->title}} </h3>

<p>	
    				{!! $page->content !!}
</p>

				</div>
			</div>
		
		</div>
    </div><!-- end pagecontnent -->
@endsection