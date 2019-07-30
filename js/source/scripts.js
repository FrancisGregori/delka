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

})
