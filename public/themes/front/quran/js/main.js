		jQuery(document).ready(function () {
			var nav = $('.main-portal-header');
			$(window).scroll(function () {
				if ($(this).scrollTop() > 95) {
					nav.addClass("sticky-top-header");
				} else {
					nav.removeClass("sticky-top-header");
				}
            });
            

            $(".scrollDown").click(function () {
                $("html,body").animate({
                    scrollTop: $("#aboutchairty").offset().top - 70
                  },
                  1000
                );
              });



              $.Tween.propHooks.number = {
                get: function(tween) {
                  var num = tween.elem.innerHTML.replace(/^[^\d-]+/, "");
                  return parseFloat(num) || 0;
                },
              
                set: function(tween) {
                  var opts = tween.options;
                  tween.elem.innerHTML =
                    (opts.prefix || "") +
                    tween.now.toFixed(opts.fixed || 0) +
                    (opts.postfix || "");
                }
              };
              
              $("#num-1").animate(
                { number: 20 },
                {
                  duration: 1000,
                  postfix: "+"
                }
              );
              
              $("#num-2")
                .delay(500)
                .animate(
                  { number: 5 },
                  {
                    duration: 2000,
                    postfix: "+"
                  }
                );
              
              $("#num-3")
                .delay(2000)
                .animate(
                  { number: 300 },
                  {
                    duration: 5000,
                    postfix: "+"
                  }
                );
              
              $("#num-4")
                .delay(4000)
                .animate(
                  { number: 50 },
                  {
                    duration: 5000,
                    postfix: "+"
                  }
                );
              


                var scrollButton = $('.seetings');
                $(window).scroll(function () {
                    $(this).scrollTop() >= 200 ? scrollButton.show() : scrollButton.hide();
                });
                scrollButton.click(function () {
                    $('html,body').animate({
                        scrollTop: 0
                    }, 1000);
                });

                $(".topMenu").click(function(){
                  $(".openmenu").toggle();
                });

                setTimeout(function(){
                  $('body').addClass('loaded');
              
                }, 3000);





$('.statistic__counter').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll:1,
  autoplay:true,
  rtl:true,
  // draggable:false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  
  ]
});


		});
    
        
