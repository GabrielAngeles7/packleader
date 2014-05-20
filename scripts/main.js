var util = {
    Global: {
        init: function() {
            this.dropdownMenu();
            this.callToAction();
        },

        dropdownMenu: function() {
            $(".has-subnav").hover(function() {
                $(this).addClass('open');
                $('.dropdown-menu').fadeIn();
            }, function() {
                $(this).removeClass('open');
            });
        },

        callToAction: function() {

            $(window).scroll(function() {
                if ($(this).scrollTop() > 130) {
                    $('.toll').fadeOut();
                    $('.call').fadeIn();
                } else {
                    $('.toll').fadeIn();
                    $('.call').fadeOut();
                }
            })
        }
    },
    Banner: {
        init: function() {
            this.titleFade();
        },

        titleFade: function() {
            var divs = $('.banner-title');
            $(window).on('scroll', function() {
                var st = $(this).scrollTop();
                divs.css({
                    'opacity': (1 - st / 250)
                });
            });

        }
    }
};




$(window).load(function() {
    util.Global.init();
    util.Banner.init();
});