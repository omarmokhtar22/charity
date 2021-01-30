<!DOCTYPE html>
<html lang="en">
<head>
	@include('front.quran.includes.head')
</head>
<body>
    
@include('front.quran.includes.header')
  
	
        @yield('content')
   
<!-- banner will hidden   -->

@include('front.quran.includes.footer')


    @include('front.quran.includes.js')
</body>
</html>