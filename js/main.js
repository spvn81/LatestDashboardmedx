/* ==================================================
  * Template: Merit
  * Version:  2
  * Date:    August 15, 2022     
===================================================== */

/*==================================================*/
/* [Table of contents] */
/*==================================================*/

/*	
    1. FUNCTIONS CALL.
    2. PRELOADER.
    3. SCROLL TOP.
    4. COUNTER.
    5. MAGNIFIC POPUP GALLERY.
    6. YOUTUBE POPUP.
    7. FILTER GALLERY.
    8. MASONRY GALLERY.
    9. FAQ ACCORDION.
    10. FAQ ACCORDION.
    11. ANIMATION.
    12. VIDEO POPUP.
    13. REGULAR CAROUSEL.
    14. PULSING VIDEO POPUP.
    15. NAVBAR FIXED.
    16. BLOG NEWS.
    17. TEAM CAROUSEL 1.
    18. TEAM CAROUSEL 2.
    19. TEAM CAROUSEL 3.
    20. NEWS CAROUSEL.
    21. CENTER TESTIMONIAL.
    22. BEAUTY SERVICES CAROUSEL.
    23. BEAUTY CAROUSEL.
    24. TESTIMONIAL CAROUSEL.
    25. LISTING CAROUSEL.
    26. CLIENTS CAROUSEL.
    27. TESTIMONIAL CAROUSEL.
    28. TEACHERS CAROUSEL.
    29. NEWS CAROUSEL.
    30. FRONT CAROUSEL.
    31. TYPING.
    32. IMAGER HOVER MOVEMENT.
    33. CHARTS.
    34. CENTER TESTIMONIAL.
    35. ACTIVITIES CAROUSEL.
    36. FARM CAROUSEL.
    37. FITNESS CAROUSEL.
    38. ASIDE TEAM CAROUSEL.
    39. RESTAURANT CAROUSEL.
    40. RESTAURANT TESTIMONIAL CAROUSEL.
    41. MENU CAROUSEL.
    42. DENTAL CAROUSEL.
    43. CHARITIES CAROUSEL.
    44. CLEANING SERVICES CAROUSEL.
    45. CLEANING TEAM CAROUSEL.
    46. FINANCE SERVICE CAROUSEL.
    47. SERVICE CAROUSEL.
    48. TEAM GLASS.
    49. PROFILE CAROUSEL.
    50. TEAM CAROUSEL 3.
    51. PRODUCT TABS.
    52. PARALLAX.
*/

/* ===============================================
    1. FUNCTIONS CALL.
=============================================== */

jQuery(document).ready(function () {
    "use strict";
    // here all ready functions

    loader();
    scroll_top();
    magnific_popup();
    accordion();

});

/* ===============================================
    2. PRELOADER.
=============================================== */
function loader() {
    "use strict";
    setTimeout(function () {
        $('#loader-wrapper').fadeOut();
    }, 600);
};

/* ===============================================
    3. SCROLL TOP.
=============================================== */
function scroll_top() {
    "use strict";
    var offset = 300,
        offset_opacity = 1200,
        scroll_top_duration = 50,
        $back_to_top = $('.cd-top');

    $(window).scroll(function () {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0,
        }, scroll_top_duration);
    });

};

/* ===============================================
    4. COUNTER.
=============================================== */
$('.counter').each(function () {
    var $this = $(this),
        countTo = $this.attr('data-count');
    $({
        countNum: $this.text()
    }).animate({
            countNum: countTo
        },

        {
            duration: 8000,
            easing: 'linear',
            step: function () {
                $this.text(Math.floor(this.countNum));
            },
            complete: function () {
                $this.text(this.countNum);
                //alert('finished');
            }

        });
});

/* ===============================================
    5. MAGNIFIC POPUP GALLERY.
=============================================== */
function magnific_popup() {
    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            opener: function (openerElement) {

                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
};

/* ===============================================
    6. YOUTUBE POPUP.
=============================================== */
function video_popup() {
    var $btnLoadMore = $(
        '<div class="btn-wrapper text-center"><a href="#" class="btn load-more">Load More</a></div>'
    );
    var items = $(".youtube-popup[data-listnum]");
    var count = items.length;
    var slice = 2;
    var current = 0;

    if (items.length > slice) {
        //bind load more event
        $btnLoadMore.on("click", function (e) {
            e.preventDefault();
            loadMoreNews();
        });
        //append load more button
        items.closest(".salvattore-grid").after($btnLoadMore);
    }

    function getItem(listnum) {
        return items
            .filter(function (index) {
                if ($(this).attr("data-listnum") == listnum) {
                    return true;
                }
            });
    }

    function loadMoreNews() {
        var end = current + slice;
        if (end >= count) {
            end = count;
            $btnLoadMore.hide();
        }
        while (current < end) {
            var listnum = current + 1; //data-listnum : 1-based
            var item = getItem(listnum);
            if (item) {
                item.fadeIn();
            }
            current++;
        }
    }

    //youtube popup
    $(".popup-youtube").magnificPopup({
        type: "iframe",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                "</div>",
            patterns: {
                youtube: {
                    index: "youtube.com/",
                    id: "v=",
                    src: "//www.youtube.com/embed/%id%?autoplay=1&rel=0&showinfo=0"
                }
            },
            srcAction: "iframe_src"
        }
    });

    //init load
    loadMoreNews();
};

/* ===============================================
    7. FILTER GALLERY.
=============================================== */
$(function () {
    var $margin = $("#kehl-grid").isotope({
        itemSelector: ".grid-box",
        // Different transition duration
        transitionDuration: "0.5s"
    });

    // on filter button click
    $(".filter-container li").click(function (e) {
        var $this = $(this);

        // Prevent default behaviour
        e.preventDefault();
        $('.filter li').removeClass('active');
        $this.addClass('active');

        // Get the filter data attribute from the button
        var $filter = $this.attr("data-filter");

        // filter
        $margin.isotope({
            filter: $filter
        });
    });
});

/* ===============================================
    8. MASONRY GALLERY.
=============================================== */
var $grid = $('.grid').imagesLoaded(function () {
    $grid.masonry({
        itemSelector: '.grid-box',
        percentPosition: true,
        columnWidth: '.grid-sizer'
    });
});

/* ===============================================
    9. FAQ ACCORDION.
=============================================== */
function accordion() {};
$('.accordion > li:eq(0) a').addClass('active').next().slideDown();

$('.accordion a').click(function (j) {
    var dropDown = $(this).closest('li').find('p');

    $(this).closest('.accordion').find('p').not(dropDown).slideUp();

    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
    } else {
        $(this).closest('.accordion').find('a.active').removeClass('active');
        $(this).addClass('active');
    }

    dropDown.stop(false, true).slideToggle();

    j.preventDefault();
});
(jQuery)

/* ===============================================
    10. FAQ ACCORDION.
=============================================== */
function accordion() {};
$('.accordion > li:eq(0) a').addClass('active').next().slideDown();

$('.accordion a').click(function (j) {
    var dropDown = $(this).closest('li').find('.inner-accordion');

    $(this).closest('.accordion').find('.inner-accordion').not(dropDown).slideUp();

    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
    } else {
        $(this).closest('.accordion').find('a.active').removeClass('active');
        $(this).addClass('active');
    }

    dropDown.stop(false, true).slideToggle();

    j.preventDefault();
});
(jQuery)
/* ===============================================
    11. ANIMATION.
=============================================== */
AOS.init({
    duration: 1200,
})

/* ===============================================
    12. VIDEO POPUP.
=============================================== */
$('.popup-youtube, .popup-vimeo').magnificPopup({
    type: 'iframe',
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
    markup: '<div class="mfp-iframe-scaler">' +
        '<div class="mfp-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
        '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button
    iframe: {
        patterns: {
            youtube: {
                index: 'youtube.com/',
                id: 'v=',
                src: 'https://www.youtube.com/embed/%id%?autoplay=1'
            }
        }
    }
});

/* ===============================================
    13. REGULAR CAROUSEL.
=============================================== */
$('.services-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.testimonials-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1200: {
            items: 3
        }
    }
});

/* ===============================================
    14. PULSING VIDEO POPUP.
=============================================== */
$('#play-video').on('click', function(e){
    e.preventDefault();
    $('#video-overlay').addClass('open');
    $("#video-overlay").append('<iframe width="560" height="315" src="https://www.youtube.com/embed/ngElkyQ6Rhs" frameborder="0" allowfullscreen></iframe>');
    });

    $('.video-overlay, .video-overlay-close').on('click', function(e){
    e.preventDefault();
    close_video();
    });

    $(document).keyup(function(e){
    if(e.keyCode === 27) { close_video(); }
    });

    function close_video() {
    $('.video-overlay.open').removeClass('open').find('iframe').remove();
    };

/* ===============================================
    15. NAVBAR FIXED.
=============================================== */
$("#navigation1").fixed();

/* ===============================================
    16. BLOG NEWS.
=============================================== */
$('.blog-news-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay:false,
    autoplayTimeout: 2500,
    autoplayHoverPause:false,
    center: true,
    
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.blog-news-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    17. TEAM CAROUSEL 1.
=============================================== */
$('.team-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.team-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    18. TEAM CAROUSEL 2.
=============================================== */
$('.team-carousel-1 .owl-carousel').owlCarousel({
    autoplay:false,
    autoplayTimeout: 2500,
    autoplayHoverPause:false,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    center: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.team-carousel-1 .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    19. TEAM CAROUSEL 3.
=============================================== */
$(".team-carousel-2 .owl-carousel").owlCarousel({
  autoplay: false,
  autoplayTimeout: 2500,
  autoplayHoverPause: false,
  loop: true,
  dots: true,
  margin: 0,
  nav: true,
  navText: [
    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
    '<i class="fa fa-angle-right" aria-hidden="true"></i>',
  ],
  navContainer: ".team-carousel-2 .custom-nav",
  responsive: {
    0: {
      items: 1,
    },
    767: {
      items: 2,
    },
    1000: {
      items: 4,
    },
  },
});

/* ===============================================
    20. NEWS CAROUSEL.
=============================================== */
$('.news-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.news-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    21. CENTER TESTIMONIAL.
=============================================== */
$('.center-testimonial-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.center-testimonial-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

/* ===============================================
    22. BEAUTY SERVICES CAROUSEL.
=============================================== */
$('.beauty-services-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.beauty-services-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    23. BEAUTY CAROUSEL.
=============================================== */
$('.beauty-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.beauty-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        700: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    24. TESTIMONIAL CAROUSEL.
=============================================== */
$('.testimonials-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.basic-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    25. LISTING CAROUSEL.
=============================================== */
$('.listing-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.listing-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1200: {
            items: 3
        }
    }
});

/* ===============================================
    26. CLIENTS CAROUSEL.
=============================================== */
$(".partners-carousel .owl-carousel").owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    navContainer: ".partners-carousel .custom-nav",
    responsive: {
        0: {
        items: 2,
        },
        767: {
        items: 2,
        },
        1000: {
        items: 5,
        },
    },
});

/* ===============================================
    27. TESTIMONIAL CAROUSEL.
=============================================== */
$('.testimonial-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.testimonial-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        
        1000: {
            items: 4 // Update this to 4 for four cards
        }
    }
});

/* ===============================================
    28. TEACHERS CAROUSEL.
=============================================== */
$('.teachers-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.teachers-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    29. NEWS CAROUSEL.
=============================================== */
$('.news-card-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.news-card-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    30. FRONT CAROUSEL.
=============================================== */
$('.front-carousel .owl-carousel').owlCarousel({
    autoplay:true,
    autoplayTimeout: 3000,
    autoplayHoverPause:true,
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.front-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        650: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    31. TYPING.
=============================================== */
let wrapper;
const sleep = ms => new Promise(resolve => setTimeout(resolve, ms));

async function writingAll(stringTarget, container) {
    wrapper = document.querySelector('[' + container + ']');
    const stringsContainer = document.getElementsByClassName(stringTarget);

    while (wrapper) {
        for (i = 0; i < stringsContainer.length; i++) {
            const string = stringsContainer[i].textContent;
            await write(string);
            await sleep(1000);
            await erase();
            await sleep(1000);
        };
    }
};

async function write(text) {
    let index = 0;
    while (index < text.length) {
        const timeout = 100;
        await sleep(timeout);
        index++;
        wrapper.innerHTML = text.substring(0, index);
    }
};


async function erase() {
    while (wrapper.textContent.length) {
        const timeout = 100;
        await sleep(timeout);
        wrapper.textContent = wrapper.textContent.substring(0, wrapper.textContent.length - 2);
    }
};

writingAll('text-layer', 'data-text');

 /* ===============================================
    32. IMAGER HOVER MOVEMENT.   
=============================================== */
$(document).on('mousemove', function (e) {
    $('.light').css({
      left: e.pageX - 300,
      top: e.pageY - 300 });

  });

  var el = $('.js-tilt-container');

  el.on('mousemove', function (e) {var _$$offset =
    $(this).offset(),left = _$$offset.left,top = _$$offset.top;
    var cursPosX = e.pageX - left;
    var cursPosY = e.pageY - top;
    var cursFromCenterX = $(this).width() / 2 - cursPosX;
    var cursFromCenterY = $(this).height() / 2 - cursPosY;


    $(this).css('transform', 'perspective(500px) rotateX(' + cursFromCenterY / 40 + 'deg) rotateY(' + -(cursFromCenterX / 40) + 'deg) translateZ(10px)');

    var invertedX = Math.sign(cursFromCenterX) > 0 ? -Math.abs(cursFromCenterX) : Math.abs(cursFromCenterX);

    //Parallax transform on image
    $(this).find('.js-perspective-neg').css('transform', 'translateY(' + cursFromCenterY / 10 + 'px) translateX(' + -(invertedX / 10) + 'px) scale(1.15)');

    $(this).removeClass('leave');
  });

  el.on('mouseleave', function () {
    $(this).addClass('leave');
});

/* ===============================================
    33. CHARTS.
=============================================== */
"use strict"; // Start of use strict
$('.circular-progress').each(function () {

    var Self = $(this);
    var getID = Self.attr('id');

    const QUARTER_R = Math.PI / 2;
    const otherBall = document.getElementById(getID + '-other-ball');

    const containerWidth = document.getElementById(getID).offsetWidth;
    const strokeWidth = 3;
    const strokeColor = '#e6a100';
    const lineWidthInPixels = strokeWidth / 100 * containerWidth;
    // Radius is from circle's exact center to the middle of the line
    const radius = (containerWidth - lineWidthInPixels) / 2
    const center = (containerWidth / 2);

    var progressCount = Self.data('progress-count');
    const circle = new ProgressBar.Circle('#' + getID, {
        color: strokeColor,
        easing: 'easeInOut',
        duration: 1200,
        strokeWidth: strokeWidth,
        text: {
            style: null, // manually style text
        },
        step: function (state, bar) {
            const angleR = bar.value() * 2 * Math.PI - QUARTER_R;
            const x = radius * Math.cos(angleR) + center;
            const y = radius * Math.sin(angleR) + center;
            otherBall.style.left = x + 'px';
            otherBall.style.top = y + 'px';
        }
    });

    circle.animate(progressCount); // Number from 0.0 to 1.0	
});


/* ===============================================
    34. CENTER TESTIMONIAL.
=============================================== */
$('.testimonial-carousel-2 .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.testimonial-carousel-2 .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

/* ===============================================
    35. ACTIVITIES CAROUSEL.
=============================================== */
$('.activities-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay:false,
    autoplayTimeout: 2500,
    autoplayHoverPause:false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.testimonial-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    36. FARM CAROUSEL.
=============================================== */
$('.farm-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.farm-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    37. FITNESS CAROUSEL.
=============================================== */
$('.fitness-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.fitness-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    38. ASIDE TEAM CAROUSEL.
=============================================== */
$('.aside-team-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.aside-team-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 2
        },
        1200: {
            items: 3
        }
    }
});

/* ===============================================
    39. RESTAURANT CAROUSEL.
=============================================== */
$('.restaurant-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.restaurant-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 2
        },
        1000: {
            items: 5
        }
    }
});

/* ===============================================
    40. RESTAURANT TESTIMONIAL CAROUSEL.
=============================================== */
$('.tw-restaurtant-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.tw-restaurtant-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
/* ===============================================
    41. MENU CAROUSEL.
=============================================== */
$('.menu-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: false,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.menu-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});

/* ===============================================
    42. DENTAL CAROUSEL.
=============================================== */
$('.dental-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.dental-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    43. CHARITIES CAROUSEL.
=============================================== */
$('.charities-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.charities-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    44. CLEANING SERVICES CAROUSEL.
=============================================== */
$('.front-carousel-alt .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,


    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.front-carousel-alt.custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});

/* ===============================================
    45. CLEANING TEAM CAROUSEL.
=============================================== */
$('.cleaning-team-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.cleaning-team-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    46. FINANCE SERVICE CAROUSEL.
=============================================== */
$('.finance-service-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.finance-service-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    47. SERVICE CAROUSEL.
=============================================== */
$('.tp-services-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.tp-services-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    48. TEAM GLASS.
=============================================== */
$('.glass-card-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    center: true,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.glass-card-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    49. PROFILE CAROUSEL.
=============================================== */
$('.profile-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,

    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,

    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.base-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 2
        },
        767: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});


/* ===============================================
    50. TEAM CAROUSEL 3.
=============================================== */
$('.team-carousel-3 .owl-carousel').owlCarousel({
    autoplay:false,
    autoplayTimeout: 2500,
    autoplayHoverPause:false,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    center: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.team-carousel-3 .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    51. PRODUCT TABS.
=============================================== */
var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
    var tabTrigger = new bootstrap.Tab(triggerEl)
    triggerEl.addEventListener('click', function (event) {
        event.preventDefault()
        tabTrigger.show()
    })
})

/* ===============================================
    52. PARALLAX.
=============================================== */
$('.img-parallax').each(function(){
    var img = $(this);
    var imgParent = $(this).parent();
    function parallaxImg () {
      var speed = img.data('speed');
      var imgY = imgParent.offset().top;
      var winY = $(this).scrollTop();
      var winH = $(this).height();
      var parentH = imgParent.innerHeight();
  
  
      // The next pixel to show on screen      
      var winBottom = winY + winH;
  
      // If block is shown on screen
      if (winBottom > imgY && winY < imgY + parentH) {
        // Number of pixels shown after block appear
        var imgBottom = ((winBottom - imgY) * speed);
        // Max number of pixels until block disappear
        var imgTop = winH + parentH;
        // Porcentage between start showing until disappearing
        var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
      }
      img.css({
        top: imgPercent + '%',
        transform: 'translate(-50%, -' + imgPercent + '%)'
      });
    }
    $(document).on({
      scroll: function () {
        parallaxImg();
      }, ready: function () {
        parallaxImg();
      }
    });
  });

