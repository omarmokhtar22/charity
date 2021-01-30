@extends('front.quran.layout')
@section('content')
<!-- start about section -->
  <!-- start slider section -->
  @include('front.quran.includes.slider')
	<!-- end slider section -->
@include('front.quran.blocks.about')
@include('front.quran.blocks.news')
@include('front.quran.blocks.statics') 
@include('front.quran.blocks.sayabout')  
@include('front.quran.blocks.activities') 
	@include('front.quran.blocks.sponsers')
@endsection