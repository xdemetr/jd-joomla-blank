
(function ($) {
    $(function (){
        $('ul.menu li').hover(
             function() {
                $( this ).addClass('hover');
            }, function() {
            $( this ).removeClass('hover');
            }
        );
    });

    $(function (){

        $('body').addClass($.cookie("mycookie"));

        $(".contrast-link .pseudo-link").click(function(){
        if ($('body').hasClass('contrast')){
            $('body').removeClass('contrast');
            $.cookie("mycookie",null);
        } else{
            $('body').addClass('contrast');
            $.cookie("mycookie",'contrast');
        }
        });
    });

    $(function () {
        var mySwiper = new Swiper('.swiper-container',{
            //slidesPerView:'1',
            //centeredSlides: true,
            autoplay: 7500,
            autoplayDisableOnInteraction: false,
            effect: 'fade'
          })

                
    });


}) (jQuery);
