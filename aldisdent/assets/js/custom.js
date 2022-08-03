jQuery(document).ready(function($) {
    // HOME INTRO SLIDER
    if($('.home-intro .slider').length) {
        $('.home-intro .slider').slick({
            prevArrow: '<button class="slick-prev"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 56" width="37" height="56"><defs><filter x="-50%" y="-50%" width="200%" height="200%" id="f1" ><feDropShadow dx="0" dy="0" stdDeviation="2.916666666666667" flood-color="#000000" flood-opacity=".7"/></filter></defs><style>.a{filter:url(#f1);fill:#fff}</style><path class="a" d="m28.7 6.6l1.4 1.4-21.2 21.2-1.4-1.4zm-19.8 19.8l21.2 21.2-1.4 1.4-21.2-21.2z"/></svg></button>',
            nextArrow: '<button class="slick-next"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 56" width="36" height="56"><defs><filter x="-50%" y="-50%" width="200%" height="200%" id="f1" ><feDropShadow dx="0" dy="0" stdDeviation="2.916666666666667" flood-color="#000000" flood-opacity=".7"/></filter></defs><style>.a{filter:url(#f1);fill:#fff}</style><path class="a" d="m29.1 27.8l-1.4 1.4-21.2-21.2 1.4-1.4zm0 0l-21.2 21.2-1.4-1.4 21.2-21.2z"/></svg></button>',
            dots: true,
            // autoplay: true,
            // autoplaySpeed: 1500,
            responsive: [
                {
                  breakpoint: 500,
                  settings: {
                    arrows: false,
                  }
                },
            ]
        })
    }

    if($('.cb-btn').length) {
        $('.cb-btn').on('click', function() {
            $('.cb-form').addClass('active-el')
            $('.overlay').addClass('active-el')
        })

        $('.overlay').on('click', function() {
            $('.active-el').removeClass('active-el')
        })

        $('.cb-form__close-btn').on('click', function() {
            $('.active-el').removeClass('active-el')
        })
    }

    // HOME MATERIALS SLIDER
    if($('.home-materials__slider').length) {
        $('.home-materials__slider').slick({
            slidesToShow: 4,
            prevArrow: '<button class="slick-prev"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 56" width="37" height="56"><defs><filter x="-50%" y="-50%" width="200%" height="200%" id="f1" ><feDropShadow dx="0" dy="0" stdDeviation="2.916666666666667" flood-color="#000000" flood-opacity=".7"/></filter></defs><style>.a{filter:url(#f1);fill:#fff}</style><path class="a" d="m28.7 6.6l1.4 1.4-21.2 21.2-1.4-1.4zm-19.8 19.8l21.2 21.2-1.4 1.4-21.2-21.2z"/></svg></button>',
            nextArrow: '<button class="slick-next"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 56" width="36" height="56"><defs><filter x="-50%" y="-50%" width="200%" height="200%" id="f1" ><feDropShadow dx="0" dy="0" stdDeviation="2.916666666666667" flood-color="#000000" flood-opacity=".7"/></filter></defs><style>.a{filter:url(#f1);fill:#fff}</style><path class="a" d="m29.1 27.8l-1.4 1.4-21.2-21.2 1.4-1.4zm0 0l-21.2 21.2-1.4-1.4 21.2-21.2z"/></svg></button>',
            autoplay: true,
            autoplaySpeed: 1000,
            responsive: [
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 3,
                  }
                },
                {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 1,
                    }
                },
            ]
        })
    }

    // HOME EQUIPMENT SLIDER 
    if($('.home-equipment__slider').length) {
        $('.home-equipment__slider').slick({
            prevArrow: '<button class="slick-prev"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 56" width="37" height="56"><defs><filter x="-50%" y="-50%" width="200%" height="200%" id="f1" ><feDropShadow dx="0" dy="0" stdDeviation="2.916666666666667" flood-color="#000000" flood-opacity=".7"/></filter></defs><style>.a{filter:url(#f1);fill:#fff}</style><path class="a" d="m28.7 6.6l1.4 1.4-21.2 21.2-1.4-1.4zm-19.8 19.8l21.2 21.2-1.4 1.4-21.2-21.2z"/></svg></button>',
            nextArrow: '<button class="slick-next"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 56" width="36" height="56"><defs><filter x="-50%" y="-50%" width="200%" height="200%" id="f1" ><feDropShadow dx="0" dy="0" stdDeviation="2.916666666666667" flood-color="#000000" flood-opacity=".7"/></filter></defs><style>.a{filter:url(#f1);fill:#fff}</style><path class="a" d="m29.1 27.8l-1.4 1.4-21.2-21.2 1.4-1.4zm0 0l-21.2 21.2-1.4-1.4 21.2-21.2z"/></svg></button>',
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
        })
    }

    // WORK POST GALLERY
    if($('.work-post__gallery').length) {
        $('.work-post__gallery-main').slick({
            slidesToShow: 1,
            asNavFor: $('.work-post__gallery-nav'),
            arrows: false,
            infinite: false,
            swipe: false,
            autoplay: true,
            autoplaySpeed: 3000,
        })

        $('.work-post__gallery-nav').slick({
            slidesToShow: 4,
            asNavFor: $('.work-post__gallery-main'),
            arrows: false,
            infinite: false,
            swipe: false,
            autoplay: true,
            autoplaySpeed: 3000,
        })

        $('.work-post__gallery-nav').on('click', function(e) {
            if($(e.target).hasClass('work-post__gallery-nav-img')) {
                const slickIdx = $(e.target).parents('.slick-slide').attr('data-slick-index')
                console.log(slickIdx)
                $('.work-post__gallery-nav').slick('slickGoTo', slickIdx)
            }
        })
    }
    
    // SERVICES TAB
    if($('.home-services').length) {
        $('.home-services__nav-list').on('click', function(e) {
            const tabClass = $(e.target).attr('data-btn-for')
            const tab = $('.home-services__item[data-tab="' + tabClass + '"]')
            
            if(!tab.hasClass('active')) {
                $('.home-services__nav-btn').removeClass('active')
                $(e.target).addClass('active')
                $('.home-services__item').removeClass('active')
                tab.addClass('active')
            }
        })
    }

    if(screen.availWidth < 600) {
        if($('.home-gallery').length) {
            $('.home-gallery').slick({
                prevArrow: '<button class="slick-prev"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 56" width="37" height="56"><defs><filter x="-50%" y="-50%" width="200%" height="200%" id="f1" ><feDropShadow dx="0" dy="0" stdDeviation="2.916666666666667" flood-color="#000000" flood-opacity=".7"/></filter></defs><style>.a{filter:url(#f1);fill:#fff}</style><path class="a" d="m28.7 6.6l1.4 1.4-21.2 21.2-1.4-1.4zm-19.8 19.8l21.2 21.2-1.4 1.4-21.2-21.2z"/></svg></button>',
                nextArrow: '<button class="slick-next"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 56" width="36" height="56"><defs><filter x="-50%" y="-50%" width="200%" height="200%" id="f1" ><feDropShadow dx="0" dy="0" stdDeviation="2.916666666666667" flood-color="#000000" flood-opacity=".7"/></filter></defs><style>.a{filter:url(#f1);fill:#fff}</style><path class="a" d="m29.1 27.8l-1.4 1.4-21.2-21.2 1.4-1.4zm0 0l-21.2 21.2-1.4-1.4 21.2-21.2z"/></svg></button>',    
            })
        }
    }

    // NAV MOBILE MENU
     const overlay = $('.overlay')

     function addActive(node)
     {
         node.addClass('active-el')
         overlay.addClass('active-el')
     }
     const hamburgerBtn = $('.header-bottom__menu-btn')
     const menu = $('.mobile-menu')
     hamburgerBtn.on('click', function() {
         addActive(menu)
     })
 
    
       const menuWrapper = $('.mobile-menu');
       hamburgerBtn.on('click', function() {
           menuWrapper.addClass('active');
             overlay.addClass('active');
       })

         $('.menu-item-has-children').on('click', function(e) {
             $(e.currentTarget).children('.sub-menu').addClass('active')
             $('.mobile-menu__back-btn').addClass('active')
       })
     
         $('.mobile-menu__back-btn').on('click', function() {
             if($('.sub-menu.active .sub-menu.active').length) {
                $('.sub-menu.active .sub-menu.active').removeClass('active')
             } else {
                $('.menu-item-has-children > .sub-menu').removeClass('active')
                $('.mobile-menu__back-btn').removeClass('active')
             }
       })
 
       $('.mobile-menu__close-svg').on('click', function() {
         $('.active-el').removeClass('active-el');
         overlay.removeClass('active-el')
     })
 
     overlay.on('click', function() {
         $('.active').removeClass('active-el')
     })


     if($('.fast-contact__btn').length) {
         $('.fast-contact__btn').on('click', function() {
             $('.fast-contact__btn').toggleClass('active')
             $('.fast-contact__content').toggleClass('active')
         })
     }
})