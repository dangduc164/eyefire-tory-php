$(document).ready(function() {
    //toggle mobile mobile
    $(".js-open-menu").click(function(e) {
        e.preventDefault();
        $(".l-header-mobile").addClass("show-canvas");
        $('body').addClass('menu-active');
    });
    $(".js-close-menu").click(function(e) {
        e.preventDefault();
        $(".l-header-mobile").removeClass("show-canvas");
        $('body').removeClass('menu-active');
    });

    //toggle dropdown languages
    $(".js-open-dropdown-languages").click(function() {
        $(".l-header-mobile__canvas__languages").toggleClass("show")
    });


    //back to top
    var btnBack = $('.c-back-to-top');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btnBack.addClass('show');
        } else {
            btnBack.removeClass('show');
        }
    });

    btnBack.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });

    var dropdownMenuSp = $('.dropdown-menu-sp');
    if (dropdownMenuSp.length > 0) {
        $('.dropdown-menu-sp').on('click', function() {
            $(this).next('.l-header-desktop__menu__dropdown-menu.desktop').slideToggle(500);
        })
    } else {
        console.log('dropdownMenuSp Not Found!');
    }

})


// Aos animation
AOS.init({
    duration: 1000
});
$(window).on("scroll", function() {
    AOS.init({
        duration: 1000
    });
});

// header detect

$(document).scroll(function() {
    var scrollTop = $(this).scrollTop();

    if (scrollTop >= 100) {
        $('.l-header-desktop-detect').addClass('active-header');
        $('.l-header-mobile-detect').addClass('active-header');
    } else {
        $('.l-header-desktop-detect').removeClass('active-header');
        $('.l-header-mobile-detect').removeClass('active-header');
    }
});

const select = document.querySelector('#contact_purpose select');

select.addEventListener('change', () => {
  select.style.color = '#0063AA';
});