$('.p-detect__what__slider > ul').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: "<button type='button' class='slick-arrow slick-prev'><img src='./assets/img/detect/icn_arrow_left.svg' alt=''></button>",
    nextArrow: "<button type='button' class='slick-arrow slick-next'><img src='./assets/img/detect/icn_arrow_right.svg' alt=''></button>",
    responsive: [{
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            arrows: false,
            slidesToScroll: 1
        }
    }, ]
});