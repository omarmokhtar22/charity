<!DOCTYPE html>
<html lang="en-US" class="background-100-e">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>جمعية زاد -- Zaad-maj.org</title>
		<meta name="description" content="جمعية زاد" />
		<meta name="keywords" content="onepage, parallax" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		@include('front.at3am.include.css')
	</head>
	<body class="state1 background-100-e">
    @include('front.at3am.include.menu')
    @yield('content')
	
		
		
		
		

		
		<!-- END: Page content -->
		<!-- BEGIN: Footer -->
		<footer class="colors-g page-transition non-preloading">
		
			<div class="bottom text-center background-10-b">
				© 2020 جميع الحقوق محفوظة. <a href="#" class="open-overlay-window heading" data-overlay-window=".credits-overlay">Credits.</a>
			</div>
		</footer>
		<!-- END: Footer -->
		@include('front.at3am.include.js')
	</body>
</html>