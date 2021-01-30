<script>
		if (typeof(atob) == "undefined")
		{
			document.write('<script src="/lib/stringencoders-v3.10.3/javascript/base64.js"><\/script>');
			var atob = function(x)
			{
				return base64.decode(x);
			}
		}
		</script>
		<script src="{{ asset('themes/front/at3am')}}/bower_components/less.js/dist/less.min.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/lib/tween/tween.min.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/lib/modernizr-edited.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/lib/SmoothScroll-1.4.9/SmoothScroll.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/bower_components/jquery-cookie/jquery.cookie.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="{{ asset('themes/front/at3am')}}/bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/bower_components/minicolors/jquery.minicolors.min.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/bower_components/slick.js/slick/slick.min.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/bower_components/shufflejs/dist/jquery.shuffle.min.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/bower_components/textillate/assets/jquery.lettering.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/bower_components/textillate/assets/jquery.fittext.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/bower_components/textillate/jquery.textillate.js"></script>
		<script src="{{ asset('themes/front/at3am')}}/lib/prism/prism.js"></script>
		<script>
		(function()
		{
			var disableMobileAnimations = true;
			var isWin = navigator.appVersion.indexOf("Win") !== -1;
			if (isWin) $('html').addClass('win');
			var ua = navigator.userAgent.toLowerCase();
			var isChrome = ua.indexOf('chrome') > -1;
			if (isChrome) $('html').addClass('chrome');
			var isAndroidBrowser4_3minus = ((ua.indexOf('mozilla/5.0') > -1 && ua.indexOf('android ') > -1 && ua.indexOf('applewebkit') > -1) && !(ua.indexOf('chrome') > -1));
			if (isAndroidBrowser4_3minus) $('html').addClass('android-browser-4_3minus');
			var isSafari = !isChrome && ua.indexOf('safari') !== -1;
			if (isSafari) $('html').addClass('safari');
			var isMobile = false; //Change false to Modernizr.touch if you want to disable animations on touchscreen devices;
			if (isMobile)
			{
				$('html').addClass('mobile');
				if (disableMobileAnimations) $('html').addClass('poor-browser');
			}
			else
			{
				$('html').addClass('non-mobile');
			}
			if (isWin && isSafari)
			{
				$('html').addClass('flat-animation');
			}
		})();
		</script>
		<script src="{{ asset('themes/front/at3am')}}/scripts/script-bundle.js"></script>
		<script>
		if (Function('/*@cc_on return document.documentMode===9@*/')())
		{
			$('html').addClass('ie9');
		}
		if (Function('/*@cc_on return document.documentMode===10@*/')())
		{
			$('html').addClass('ie10');
		}
		if (!!navigator.userAgent.match(/Trident.*rv\:11\./))
		{
			$('html').addClass('ie11');
		}
		</script>