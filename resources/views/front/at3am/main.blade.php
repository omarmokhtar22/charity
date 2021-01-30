@extends('front.at3am.layout')
@section('content')

<!-- BEGIN: Page content -->
		<!-- Begin slider -->
        @include('front.at3am.slider_1')
		<section id="about">
			<!--@include('front.at3am.slider_2') -->
			@include('front.at3am.about')
			<!--
				@include('front.at3am.blackarea_1')
			-->
		</section>
		@include('front.at3am.process')
		@include('front.at3am.news')
	
		@include('front.at3am.gallary')
	
		
		@include('front.at3am.contact')
@endsection