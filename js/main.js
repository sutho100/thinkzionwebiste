var slideUpNav = function () {
    $('.nav-links').stop().slideUp("fast", function () {

    });
};

var slideDownNav = function () {
    $('.nav-links').stop().slideDown("fast", function () {

    });
};

var toggleSlideNav = function () {
    $('.nav-links').stop().slideToggle("fast", function () {

    });
};

var applyShadow = function (element) {
    $("'" + element + "'").css('-webkit-box-shadow', shadow);
    $("'" + element + "'").css('-moz-box-shadow', shadow);
    $("'" + element + "'").css('box-shadow', shadow);
};

var removeShadow = function (element) {
    $("'" + element + "'").css('-webkit-box-shadow', shadow);
    $("'" + element + "'").css('-moz-box-shadow', shadow);
    $("'" + element + "'").css('box-shadow', shadow);
};

var shadow = '0 16px 16px -16px rgba(33,30,20, 0.2)';


//---------------------------------------------
//Detect initial size of webpage
//---------------------------------------------
$(document).ready(function () {
    if (window.innerWidth > 767) {
        $('.nav-links').show();
    } else {
        $('.nav-links').hide();
    }
});


//---------------------------------------------
//Detect resize width of browser
//---------------------------------------------
$(window).resize(function () {
    if (window.innerWidth > 767) {
        $('.nav-links').show();

        
    } else {
        $('.nav-links').hide();
    }
});

//---------------------------------------------
//Close menu after clicked
//---------------------------------------------
$(document).ready(function () {
    $("header a").click(function () {
        //Do stuff when clicked
        if (window.innerWidth < 768) {
            setTimeout(
              function () {
                  $(".nav-links").hide();
              }, 300);
        }
    });
});

//---------------------------------------------
//Adjust the anchor scroll position
//---------------------------------------------
var headerHeight;
$(window).on("hashchange", function () {
    if ($(window).width() < 768) {
        headerHeight = 60;
        console.log("change 60");
    } else {
        headerHeight = 110;
        console.log("change 110");
    }
    window.scrollTo(window.scrollX, window.scrollY - headerHeight);

    if ($(window).width() < 768) {
        slideUpNav();
    }
});


//---------------------------------------------
//show and hide menu for non desktop screens
//---------------------------------------------
$(".nav-button").bind("click", function () {
    toggleSlideNav();
});

//---------------------------------------------
//Auto fade to next image in slideshow
//---------------------------------------------
//trigger function periodically
window.setInterval(function () {
    transitionImage();
}, 9000);

var transitionCount = 1;

function transitionImage() {
    //increment counter
    if (transitionCount > 2) {
        transitionCount = 1;
    } else {
        transitionCount++;
    }

    $(".feature.row img").animate({
        opacity: 0
    }, 0, function () {
        // Animation complete.
        if ($("#featureImg1").length) {
            $("#featureImg1").attr("src", "img/feature-efteepee" + transitionCount + ".jpg");
        }
        if ($("#featureImg2").length) {
            $("#featureImg2").attr("src", "img/feature-urlDomainList" + transitionCount + ".jpg");
        }
        if ($("#featureImg3").length) {
            $("#featureImg3").attr("src", "img/feature-kosrae" + transitionCount + ".jpg");
        }
    });

    $(".feature.row img").animate({
        opacity: 1
    }, 0);
}

//---------------------------------------------
//show and hide menu for non desktop screens
//---------------------------------------------
$(window).scroll(function () {
    //var scrollPos = $(document).scrollTop();
    //console.log('scrollPos ' + scrollPos);

    //$('.where').css('background-position', 'center -' + scrollPos/5 + 'px');
});


//---------------------------------------------
//Smooth scrolling to anchor links
//---------------------------------------------
$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 300);
                return false;
            }
        }
    });
});