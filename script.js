// import sal from './node_modules/sal.js/dist/sal'


$(function () {
        $(window).resize(function(){
            if($(window).width() > 640){
                $('.btnMenuMobile').removeClass('aberto');
                $(".menuMobileItems").slideUp('slow');
            }
        });

        $('.btnMenuMobile').click(function () {
            $('.btnMenuMobile').toggleClass('aberto');
            $(".menuMobileItems").slideToggle('slow');
        });


        $('.menu-top a').click(function(){
            var btnMenuClicked = $(this);

            $(".menuMobileItems").slideUp('fast');
            if($('.btnMenuMobile').hasClass('aberto')){
                $('.btnMenuMobile').removeClass('aberto');
            }

            $('.menu-top a').each(function(){
                $(this).removeClass('active');
            });

            $('.menu-top a').each(function(){
                if($(this).attr('href') == btnMenuClicked.attr('href')){
                    $(this).addClass('active');
                }
            })
        });

});


$(function () {
    // Select all links with hashes
    $('a[href*="#"].scroll, a[href*="#"].scroll2')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 90
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });

});
var hrefScroll;


$(function(){
    if ($('.inputphone').length) {
        jQuery('.inputphone').each(function(index, value){
            brTelMask(value);
        });
    }

    function brTelMask(element) {
        var element = jQuery(element);
    // jQuery.fn.brTelMask = function() {
        return element.each(function(){
            var el = element;
            $(el).focus(function(){
                $(el).mask("(99) 9999-9999?9");
            });
            $(el).focusout(function(){
                var phone, input;
                input = $(el);
                input.unmask();
                phone = input.val().replace(/\D/g, '');
                if(phone.length > 10){
                    input.mask("(99) 99999-999?9");
                }else{
                    input.mask("(99) 9999-9999?9");
                }
            });
        });
    };
    
})
