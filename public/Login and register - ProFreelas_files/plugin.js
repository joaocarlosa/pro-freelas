(function($) {
    "use strict";

    // Mega menu button
    $(function() {
        $('.dropdown-mega-menu-toggle').on('hover', function(event) {
            event.preventDefault();

            const dropdown = $(this).closest('.menu-item');

            if (dropdown.is('.open')) {
                dropdown.removeClass('open');
            } else {
                dropdown.addClass('open');
            }
        });

        $('.mega-menu-content').on('mouseenter', function(event) {
            $(this).closest('.menu-item').addClass('open');
        });

        $('.mega-menu-content').on('mouseleave', function(event) {
            $(this).closest('.menu-item').removeClass('open');
        });
    });

    // Slick RTL Support
    function rtl_slick() {
        if ($('body').hasClass("rtl")) {
            return true;
        } else {
            return false;
        }
    }
    // Price range
    $(".price-range").ionRangeSlider({
        type: "double",
        skin: "round",
        min: 0,
        max: $('.price-range').attr('data-max-value'),
        from: 0,
        to: $('.price-range').attr('data-max-value'),
        step: 1,
        onStart: function(data) {
            $('.from-price').prop("value", data.from);
            $('.to-price').prop("value", data.to);
        },
        onChange: function(data) {
            $('.from-price').prop("value", data.from);
            $('.to-price').prop("value", data.to);
        }
    });

    // Service slider
    $('.service-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
        arrows: false,
        fade: true,
        dots: false,
        asNavFor: '.service-slider-nav',
        nextArrow: '<i class="fas fa-chevron-right"></i>',
        prevArrow: '<i class="fas fa-chevron-left"></i>'
    });

    $('.service-slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 1000,
        asNavFor: '.service-slider',
        arrows: false,
        infinite: true,
        focusOnSelect: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerMode: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerMode: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true
                }
            }
        ]
    });

    // Services, Projects, Buyers, Sellers
    $('.services,.projects,.buyers,.sellers').slick({
        arrows: true,
        infinite: true,
        rtl: rtl_slick(),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        nextArrow: '<i class="fas fa-chevron-right"></i>',
        prevArrow: '<i class="fas fa-chevron-left"></i>',
    });

    // Service item images
    $('.service-item-images').slick({
        arrows: false,
        infinite: true,
        dots: true,
        rtl: rtl_slick(),
        slidesToShow: 1,
        slidesToScroll: 1
    });

    // product items tab
    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
        $('.service-item-images').slick('setPosition');
    });

    // Text Editor
    $('#editor').richText({
        fonts: false,
        fontColor: false,
        imageUpload: false,
        fileUpload: false,
        videoEmbed: false,
        urls: false,
        table: false,
        removeStyles: true,
        heading: false,
        useParagraph: true,
    });

    // Elementor front-end
    $(window).on('elementor/frontend/init', function() {

        elementorFrontend.hooks.addAction('frontend/element_ready/projects.default', function($scope, $) {
            $scope.find('.projects').not('.slick-initialized').slick({
                arrows: true,
                infinite: true,
                rtl: rtl_slick(),
                nextArrow: '<i class="fas fa-chevron-right"></i>',
                prevArrow: '<i class="fas fa-chevron-left"></i>',
            });
        });

        elementorFrontend.hooks.addAction('frontend/element_ready/services.default', function($scope, $) {
            $scope.find('.services').not('.slick-initialized').slick({
                arrows: true,
                infinite: true,
                rtl: rtl_slick(),
                nextArrow: '<i class="fas fa-chevron-right"></i>',
                prevArrow: '<i class="fas fa-chevron-left"></i>',
            });
        });

        elementorFrontend.hooks.addAction('frontend/element_ready/services.default', function($scope, $) {
            $scope.find('.service-item-images').not('.slick-initialized').slick({
                arrows: false,
                infinite: true,
                dots: true,
                rtl: rtl_slick(),
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });

        elementorFrontend.hooks.addAction('frontend/element_ready/buyers.default', function($scope, $) {
            $scope.find('.buyers').not('.slick-initialized').slick({
                arrows: true,
                infinite: true,
                rtl: rtl_slick(),
                nextArrow: '<i class="fas fa-chevron-right"></i>',
                prevArrow: '<i class="fas fa-chevron-left"></i>',
            });
        });

        elementorFrontend.hooks.addAction('frontend/element_ready/sellers.default', function($scope, $) {
            $scope.find('.sellers').not('.slick-initialized').slick({
                arrows: true,
                infinite: true,
                rtl: rtl_slick(),
                nextArrow: '<i class="fas fa-chevron-right"></i>',
                prevArrow: '<i class="fas fa-chevron-left"></i>',
            });
        });

        elementorFrontend.hooks.addAction('frontend/element_ready/clients.default', function($scope, $) {
            $scope.find('.clients').not('.slick-initialized').slick({
                arrows: true,
                infinite: true,
                rtl: rtl_slick(),
                slidesToShow: 5,
                slidesToScroll: 5,
                nextArrow: '<i class="fas fa-chevron-right"></i>',
                prevArrow: '<i class="fas fa-chevron-left"></i>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });

        elementorFrontend.hooks.addAction('frontend/element_ready/service-categories.default', function($scope, $) {
            $scope.find('#service-categories').not('.slick-initialized').slick({
                arrows: true,
                infinite: true,
                rtl: rtl_slick(),
                nextArrow: '<i class="fas fa-chevron-right"></i>',
                prevArrow: '<i class="fas fa-chevron-left"></i>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });

    });

})(jQuery);