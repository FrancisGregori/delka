jQuery(function ($) {

    if ($('select').length > 0) {
        $('select').customSelect({block: 'jquery-select'});
    }


    if ($('#header-banner .owl-carousel').length > 0) {
        $('#header-banner .owl-carousel').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            singleItem: true,
            items: 1
        })
    }

    if ($('#gallery .owl-carousel').length > 0) {

        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            navText: ['<i class="dlk-icon-chevron-left"></i>', '<i class="dlk-icon-chevron-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        })

    }
});
