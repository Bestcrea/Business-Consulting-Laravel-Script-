$(() => {
    'use strict'

    /*=============================================
        =    		 Preloader			      =
    =============================================*/
    function preloader() {
        $('#preloader').delay(0).fadeOut()
    }

    let initPopupVideo = function () {
        /*=============================================
            =    		Magnific Popup		      =
        =============================================*/
        if ($(document).find('.popup-video').length) {
            /* magnificPopup video view */
            $(document).find('.popup-video').magnificPopup({
                type: 'iframe',
            })
        }
    }

    const isRTL = Theme.isRtl()

    $(document).ready(function () {
        preloader()
        mainSlider()
        wowAnimation()
        aosAnimation()
        initPopupVideo()
        if (typeof tg_title_animation !== 'undefined') {
            tg_title_animation()
        }
    })

    /*=============================================
        =    		Mobile Menu			      =
    =============================================*/
    //SubMenu Dropdown Toggle
    if ($('.menu-area li.menu-item-has-children ul').length) {
        $('.menu-area .navigation li.menu-item-has-children').append(`<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>`)
    }

    //Mobile Nav Hide Show
    if ($('.mobile-menu').length) {
        let mobileMenuContent = $('.menu-area .main-menu').html()
        $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent)

        //Dropdown Button
        $('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function () {
            $(this).toggleClass('open')
            $(this).prev('ul').slideToggle(300)
        })
        //Menu Toggle Btn
        $('.mobile-nav-toggler').on('click', function () {
            $('body').addClass('mobile-menu-visible')
        })

        //Menu Toggle Btn
        $('.menu-backdrop, .mobile-menu .close-btn').on('click', function () {
            $('body').removeClass('mobile-menu-visible')
        })
    }

    /*=============================================
        =     Menu sticky & Scroll to top      =
    =============================================*/
    $(window).on('scroll', function () {
        let scroll = $(window).scrollTop()
        if (scroll < 245) {
            $('#sticky-header').removeClass('sticky-menu')
            $('.scroll-to-target').removeClass('open')
            $('#header-fixed-height').removeClass('active-height')
        } else {
            $('#sticky-header').addClass('sticky-menu')
            $('.scroll-to-target').addClass('open')
            $('#header-fixed-height').addClass('active-height')
        }
    })

    /*=============================================
        =    		 Scroll Up  	         =
    =============================================*/
    if ($('.scroll-to-target').length) {
        $('.scroll-to-target').on('click', function () {
            let target = $(this).attr('data-target')
            // animate
            $('html, body').animate(
                {
                    scrollTop: $(target).offset().top,
                },
                1000
            )
        })
    }

    /*=============================================
        =            Header Search            =
    =============================================*/
    $('.header-search > a').on('click', function () {
        $('.search-popup-wrap').slideToggle()
        return false
    })

    $('.search-close').on('click', function () {
        $('.search-popup-wrap').slideUp(500)
    })

    /*=============================================
    =     Offcanvas Menu      =
    =============================================*/
    $('.menu-tigger').on('click', function () {
        $('.extra-info,.offcanvas-overly').addClass('active')
        return false
    })
    $('.menu-close,.offcanvas-overly').on('click', function () {
        $('.extra-info,.offcanvas-overly').removeClass('active')
    })

    /*=============================================
        =          Data Background               =
    =============================================*/
    let initBackground = function () {
        $('[data-background]').each(function () {
            $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')')
        })
    }

    initBackground()

    /*=============================================
        =    		 Main Slider		      =
    =============================================*/
    function mainSlider() {
        let BasicSlider = $('.slider-active')
        BasicSlider.on('init', function () {
            let $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]')
            doAnimations($firstAnimatingElements)
        })
        BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
            let $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]')
            doAnimations($animatingElements)
        })
        BasicSlider.slick({
            autoplay: BasicSlider.data('autoplay'),
            autoplaySpeed: BasicSlider.data('autoplay-speed') || 10000,
            rtl: isRTL,
            dots: false,
            fade: true,
            arrows: false,
            responsive: [{ breakpoint: 767, settings: { dots: false, arrows: false } }],
        })

        function doAnimations(elements) {
            let animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend'
            elements.each(function () {
                let $this = $(this)
                let $animationDelay = $this.data('delay')
                let $animationType = 'animated ' + $this.data('animation')
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay,
                })
                $this.addClass($animationType).one(animationEndEvents, function () {
                    $this.removeClass($animationType)
                })
            })
        }
    }

    let initSlick = function (element, options) {
        const $element = $(document).find(element)

        if (! $element.length || $element.hasClass('slick-initialized')) {
            return
        }

        options.rtl = isRTL

        $element.slick(options)
    }

    /*=============================================
        =    		Brand Active		      =
    =============================================*/
    let initTestimonialSlider = function () {
        /*=============================================
        =    		Brand Active		      =
    =============================================*/
        initSlick('.brand-active', {
            dots: false,
            infinite: true,
            speed: 1000,
            autoplay: true,
            arrows: false,
            slidesToShow: 5,
            rtl: isRTL,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        arrows: false,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: false,
                    },
                },
            ],
        })

        /*=============================================
            =    		services Active		      =
        =============================================*/
        initSlick('.services-active', {
            dots: true,
            infinite: true,
            speed: 1000,
            autoplay: true,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            rtl: isRTL,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    },
                },
            ],
        })

        initSlick('.testimonial-active', {
            dots: false,
            infinite: true,
            speed: 1000,
            autoplay: true,
            fade: true,
            arrows: true,
            rtl: isRTL,
            prevArrow: '<button type="button" class="slick-prev" title="Previous"><i class="flaticon-right-arrow"></i></button>',
            nextArrow: '<button type="button" class="slick-next" title="Next"><i class="flaticon-right-arrow"></i></button>',
            appendArrows: '.testimonial-nav',
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        })

        /*=============================================
            =    		testimonial Active		      =
        =============================================*/
        initSlick('.testimonial-active-two', {
            dots: false,
            infinite: true,
            speed: 1000,
            autoplay: true,
            arrows: true,
            rtl: isRTL,
            prevArrow: '<button type="button" class="slick-prev" title="Previous"><i class="flaticon-right-arrow"></i></button>',
            nextArrow: '<button type="button" class="slick-next" title="Next"><i class="flaticon-right-arrow"></i></button>',
            appendArrows: '.testimonial-nav-two',
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        })

        /*=============================================
            =    		testimonial Active		      =
        =============================================*/
        initSlick('.testimonial-active-three', {
            dots: false,
            infinite: true,
            speed: 1000,
            autoplay: true,
            fade: true,
            arrows: true,
            rtl: isRTL,
            prevArrow: '<button type="button" class="slick-prev" title="Previous"><i class="flaticon-right-arrow"></i></button>',
            nextArrow: '<button type="button" class="slick-next" title="Next"><i class="flaticon-right-arrow"></i></button>',
            appendArrows: '.testimonial-nav-three',
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        })

        /*=============================================
            =    		testimonial Active		      =
        =============================================*/
        initSlick('.testimonial-active-four', {
            dots: false,
            infinite: true,
            speed: 1000,
            autoplay: true,
            arrows: true,
            rtl: isRTL,
            prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-right-arrow"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="flaticon-right-arrow"></i></button>',
            appendArrows: '.testimonial-nav-four',
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        })

        /*=============================================
            =    		testimonial Active		      =
        =============================================*/
        initSlick('.testimonial-active-five', {
            dots: false,
            infinite: true,
            speed: 1000,
            autoplay: true,
            arrows: true,
            rtl: isRTL,
            prevArrow: '<button type="button" class="slick-prev" title="Previous"><i class="flaticon-right-arrow"></i></button>',
            nextArrow: '<button type="button" class="slick-next" title="Next"><i class="flaticon-right-arrow"></i></button>',
            appendArrows: '.testimonial-nav-five',
            vertical: ! isRTL,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        })
    }

    initTestimonialSlider()

    document.addEventListener('shortcode.loaded', () => {
        initTestimonialSlider()
        initBackground()
        initPopupVideo()
        initProjectSlider()
        initOdometer()
    })

    /*=============================================
        =         Project Active           =
    =============================================*/
    let initProjectSlider = function () {
        if (jQuery('.project-active').length > 0) {
            new Swiper('.project-active', {
                rtl: isRTL,
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: false,
                breakpoints: {
                    500: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2.5,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 3.5,
                        spaceBetween: 20,
                    },
                    1200: {
                        slidesPerView: 3.5,
                        spaceBetween: 20,
                    },
                    1500: {
                        slidesPerView: 4,
                        spaceBetween: 24,
                    },
                },
                // If we need pagination
                pagination: {
                    el: '.project-swiper-pagination',
                    clickable: true,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            })
        }
    }

    initProjectSlider()

    /*=============================================
        =    		pricing Active  	       =
    =============================================*/
    $('.pricing-tab-switcher, .tab-btn').on('click', function () {
        $('.pricing-tab-switcher, .tab-btn').toggleClass('active'),
            $('.pricing-tab').toggleClass('seleceted'),
            $('.pricing-price, .pricing-price-two').toggleClass('change-subs-duration')
    })

    /*=============================================
        =          services Active               =
    =============================================*/
    $('.services-item-two').hover(function () {
        $(this).find('.services-content-two p').slideToggle(300)
        return false
    })

    /*=============================================
        =        Team Social Active 	       =
    =============================================*/
    $('.social-toggle-icon').on('click', function () {
        const currenTarget = $(this)
        currenTarget.closest('.team-social-three').toggleClass('open')
        $(this).parent().find('ul').slideToggle(400)
        $(this).find('i').toggleClass('fa-times')
        return false
    })

    /*=============================================
            =           Partical JS        =
    =============================================*/
    if ($('.banner-area-three, .banner-area-five').length) {
        const colors = ['#FF4D4D', '#1AD6FF', '#FFCD4D', '#BB6BD9', '#1A66FF']

        const numBalls = 30
        const balls = []

        for (let i = 0; i < numBalls; i++) {
            let ball = document.createElement('div')
            ball.classList.add('ball')
            ball.style.background = colors[Math.floor(Math.random() * colors.length)]
            ball.style.left = `${Math.floor(Math.random() * 100)}%`
            ball.style.top = `${Math.floor(Math.random() * 100)}%`
            ball.style.transform = `scale(${Math.random()})`
            ball.style.width = `${Math.random() * 10}px`
            ball.style.height = ball.style.width
            balls.push(ball)

            $('.banner-area-three, .banner-area-five').append(ball)
        }

        balls.forEach((el, i, ra) => {
            let to = {
                x: Math.random() * (i % 2 === 0 ? -10 : 11),
                y: Math.random() * 12,
            }

            let anim = el.animate(
                [{ transform: 'translate(0, 0)' }, { transform: `translate(${to.x}rem, ${to.y}rem)` }],
                {
                    duration: (Math.random() + 1) * 2000,
                    direction: 'alternate',
                    fill: 'both',
                    iterations: Infinity,
                    easing: 'ease-in-out',
                }
            )
        })
    }

    /*=============================================
            =           Partical JS        =
    =============================================*/
    if ($('.about-area-six').length) {
        const colors = ['#FF4D4D', '#1AD6FF', '#FFCD4D', '#BB6BD9', '#1A66FF']

        const numBalls = 30
        const balls = []

        for (let i = 0; i < numBalls; i++) {
            let ball = document.createElement('div')
            ball.classList.add('ball')
            ball.style.background = colors[Math.floor(Math.random() * colors.length)]
            ball.style.left = `${Math.floor(Math.random() * 100)}%`
            ball.style.top = `${Math.floor(Math.random() * 100)}%`
            ball.style.transform = `scale(${Math.random()})`
            ball.style.width = `${Math.random() * 10}px`
            ball.style.height = ball.style.width
            balls.push(ball)

            $('.about-area-six').append(ball)
        }

        balls.forEach((el, i, ra) => {
            let to = {
                x: Math.random() * (i % 2 === 0 ? -10 : 11),
                y: Math.random() * 12,
            }

            let anim = el.animate(
                [{ transform: 'translate(0, 0)' }, { transform: `translate(${to.x}rem, ${to.y}rem)` }],
                {
                    duration: (Math.random() + 1) * 2000,
                    direction: 'alternate',
                    fill: 'both',
                    iterations: Infinity,
                    easing: 'ease-in-out',
                }
            )
        })
    }

    /*=============================================
            =           Partical JS        =
    =============================================*/
    if ($('.testimonial-area-five').length) {
        const colors = ['#FF4D4D', '#1AD6FF', '#FFCD4D', '#BB6BD9', '#1A66FF']

        const numBalls = 30
        const balls = []

        for (let i = 0; i < numBalls; i++) {
            let ball = document.createElement('div')
            ball.classList.add('ball')
            ball.style.background = colors[Math.floor(Math.random() * colors.length)]
            ball.style.left = `${Math.floor(Math.random() * 100)}%`
            ball.style.top = `${Math.floor(Math.random() * 100)}%`
            ball.style.transform = `scale(${Math.random()})`
            ball.style.width = `${Math.random() * 10}px`
            ball.style.height = ball.style.width
            balls.push(ball)

            $('.testimonial-area-five').append(ball)
        }

        balls.forEach((el, i, ra) => {
            let to = {
                x: Math.random() * (i % 2 === 0 ? -10 : 11),
                y: Math.random() * 12,
            }

            let anim = el.animate(
                [{ transform: 'translate(0, 0)' }, { transform: `translate(${to.x}rem, ${to.y}rem)` }],
                {
                    duration: (Math.random() + 1) * 2000,
                    direction: 'alternate',
                    fill: 'both',
                    iterations: Infinity,
                    easing: 'ease-in-out',
                }
            )
        })
    }

    /*=============================================
        =          easyPieChart Active          =
    =============================================*/
    function easyPieChart() {
        if ($('.circle-item').length === 0) {
            return
        }

        $('.circle-item').on('inview', function (event, isInView) {
            let borderColor = $(this).data('color')
            if (isInView) {
                $('.chart').easyPieChart({
                    scaleLength: 0,
                    lineWidth: 10,
                    trackWidth: 10,
                    size: 160,
                    rotate: 360,
                    animate: 3000,
                    trackColor: '#2A3E66',
                    barColor: borderColor,
                })
            }
        })
    }
    easyPieChart()

    /*-------------------------------------
    Intersection Observer
    -------------------------------------*/
    if (!!window.IntersectionObserver) {
        let observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active-animation')
                        //entry.target.src = entry.target.dataset.src;
                        observer.unobserve(entry.target)
                    }
                })
            },
            {
                rootMargin: '0px 0px -100px 0px',
            }
        )
        document.querySelectorAll('.has-animation').forEach((block) => {
            observer.observe(block)
        })
    } else {
        document.querySelectorAll('.has-animation').forEach((block) => {
            block.classList.remove('has-animation')
        })
    }


    /*=============================================
        =    		 Jarallax Active  	         =
    =============================================*/
    if (typeof jarallax !== 'undefined') {
        $('.jarallax').jarallax({
            speed: 0.2,
        })
    }

    /*=============================================
        =    		Odometer Active  	       =
    =============================================*/
    function initOdometer() {
        if ($('.odometer').length !== 0) {
            $('.odometer').appear(function () {
                let odo = $('.odometer')
                odo.each(function () {
                    let countNumber = $(this).attr('data-count')
                    $(this).html(countNumber)
                })
            })
        }
    }

    initOdometer()

    /*=============================================
        =    		 Wow Active  	         =
    =============================================*/
    function wowAnimation() {
        let wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true,
        })
        wow.init()
    }

    /*=============================================
        =           Aos Active       =
    =============================================*/
    function aosAnimation() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                mirror: true,
                once: true,
                disable: 'mobile',
            })
        }
    }

    /*=============================================
        =           Trigger Esc       =
     */

    $(document).keyup(function (event) {
        if (event.key === 'Escape') {
            $('.search-popup-wrap').slideUp(500)
            $('.extra-info,.offcanvas-overly').removeClass('active')
        }
    })

    // Custom
    const $announcementContainer = $('.ae-anno-announcement-wrapper')
    const $announcementData = $('[data-bb-toggle="announcement"]')

    if ($announcementContainer.length && $announcementData.length) {
        setTimeout(() => {
            getHeightAnnouncement()
        }, 500)

        $announcementContainer.on('click',  '.ae-anno-announcement__arrow, .ae-anno-announcement__dismiss-button', function() {
            getHeightAnnouncement()
        })

        $(window).resize(function(){
            getHeightAnnouncement()
        });

        function getHeightAnnouncement() {
            const height = $announcementContainer.outerHeight() || 0

            $($announcementData.data('bb-target')).css('--height-announcement', height + 'px')
        }
    }

    $("[data-countdown]").each(function () {
        const currentTarget = $(this)

        const finalDate = currentTarget.data("countdown");
        $(this).countdown(finalDate, function (event) {
            currentTarget.html(event.strftime(`
                <div class="countdown-item"><span class="countdown-amount">%D</span> <span class="countdown-period">${currentTarget.data('days-text')}</span></div>
                <div class="countdown-item"><span class="countdown-amount">%H</span> <span class="countdown-period">${currentTarget.data('hours-text')}</span></div>
                <div class="countdown-item"><span class="countdown-amount">%M</span> <span class="countdown-period">${currentTarget.data('minutes-text')}</span></div>
                <div class="countdown-item"><span class="countdown-amount">%S</span> <span class="countdown-period">${currentTarget.data('seconds-text')}</span></div>
            `));
        });
    })
})
