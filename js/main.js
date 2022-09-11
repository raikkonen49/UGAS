$(document).foundation();

$(document).ready(function() {

    $(".fancybox").fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        },
        beforeShow: function() {
            $(".fancybox-skin").css("backgroundColor", "transparent");
            $(".fancybox-skin").css("padding", "0px");
        }
    });

    var forEach = function(t, o, r) {
        if ("[object Object]" === Object.prototype.toString.call(t))
            for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
        else
            for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t)
    };

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
        forEach(hamburgers, function(hamburger) {
            hamburger.addEventListener("click", function() {
                this.classList.toggle("is-active");
            }, false);
        });
    }

    $(".hamburger").click(function() {
        $(".mob-nav").toggleClass("close");
    });

    $('.works-block .works').each(function() {
        var itemW = $(this).outerWidth();
        var itemH = itemW / 1.935;
        $(this).css('height', itemH);
        $(this).find('a').css('height', itemH);
    });

    $('.web-text-img').each(function() {
        var itemW = $(this).outerWidth();
        var itemH = itemW / 1.389;
        $(this).css('height', itemH);
    });

    var highestBox = 0;
    $('.works-block .works').each(function(){
        if($(this).height() > highestBox){
            highestBox = $(this).height();
        }
        $(this).height(highestBox);
        $(this).find('a').height(highestBox);
    });


    var $nav = $('.nav, .mob-nav-block'),
        $win = $(window),
        winH = $win.height(); // Get the window height.
    $win.on("scroll", function() {
        $nav.toggleClass("fix", $(this).scrollTop() > winH);
    }).on("resize", function() { // If the user resizes the window
        winH = $(this).height(); // you'll need the new height value
    });


    $('.web-info ul li a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 700, 'swing', function() {
            window.location.hash = target;
        });
    });


    var blockHeight = $('.works-block').outerHeight();
    $('.works-after').css('max-height', blockHeight);

    $(window).scroll( function() {

        var pageWidth = $(document).width();
        var scrollPercent = 90 * $(window).scrollTop() / ($(document).height() - $(window).height());
        var leftPosition = pageWidth * scrollPercent / 100 +155;

        $('.works-after').css('height', leftPosition);

        var afterOneHeight = $('.works-after').outerHeight();

        if (blockHeight == afterOneHeight) {
            $('.works-more-after').addClass('active');
            $('.works-more-hold .btn').addClass('active');
        } else {
            $('.works-more-after').removeClass('active');
            $('.works-more-hold .btn').removeClass('active');
        }
    });

    // slogan animation

    $(document).ready(function() {
    $('.intro').mousemove(function(event) {
        cx = Math.ceil($('.slogan').width() / 2.0);
        cy = Math.ceil($('.slogan').height() / 2.0);
        dx = event.pageX - cx;
        dy = event.pageY - cy;

        tiltx = (dy / cy);
        tilty = - (dx / cx);
        radius = Math.sqrt(Math.pow(tiltx,2) + Math.pow(tilty,2));
        degree = (radius * 10);

        $('.slogan').css('-webkit-transform','rotate3d(' + tiltx + ', ' + tilty + ', 0, ' + degree + 'deg)');
    });
});

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.nav').outerHeight();

$(window).scroll(function(event) {
    didScroll = true;
});
setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var $win = $(window),
        st = $(this).scrollTop();
    if (Math.abs(lastScrollTop - st) <= delta)
        return;
    if (st > lastScrollTop && st > navbarHeight) {
        $('.nav-hold').addClass('nav-up');
    } else {
        if (st + $(window).height() < $(document).height()) {
            $('.nav-hold').removeClass('nav-up');
        }
        if (st + $(window).height() < $(document).scrollTop() < $win.height()) {
            $('.mob-nav-block').removeClass('nav-up');
        }
    }

    lastScrollTop = st;
}


// more works fade in

$(".works-row").slice(2).hide();
var mincount = 1;
var maxcount = 2;
$(window).scroll(function() {

    if ($(window).scrollTop() + $(window).height() >= $(document).height() - 1800) {
        $(".works-row").slice(mincount, maxcount).fadeIn(2000);
        mincount = mincount + 1;
        maxcount = maxcount + 1;
    }
});

    // popups

    // $(".trigger").click(function() {
    //     $(".nav ul").toggleClass("close");
    //     $(".trigger").toggleClass("close");
    // });


    // #ScrollToTop

    // $("a[href='#top']").click(function() {
    //   $("html, body").animate({ scrollTop: 0 }, "slow");
    //   return false;
    // });



});

$(window).resize(function() {

    $('.works-block .works').each(function() {
        var itemW = $(this).outerWidth();
        var itemH = itemW / 1.935;
        $(this).css('height', itemH);
        $(this).find('a').css('height', itemH);
    });

    $('.web-text-img').each(function() {
        var itemW = $(this).outerWidth();
        var itemH = itemW / 1.389;
        $(this).css('height', itemH);
    });

    var highestBox = 0;
    $('.works-block .works').each(function(){
        if($(this).height() > highestBox){
            highestBox = $(this).height();
        }
        $(this).height(highestBox);
        $(this).find('a').height(highestBox);
    });

});
