jQuery(function ($) {

    $('select').customSelect({block: 'jquery-select'});


    if ($('.theme-carousel').length > 0) {
        $('.theme-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            stagePadding: 30,
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

    /*    var $videoSrc;
     $('.video-btn').click(function () {
     $videoSrc = $(this).data("src");
     });

     $('#modalVideo').on('shown.bs.modal', function (e) {
     $("#iframe-video").attr('src', $videoSrc + "?rel=0&controls=0&showinfo=0&autoplay=1");
     })

     $('#modalVideo').on('hide.bs.modal', function (e) {
     $("#iframe-video").attr('src', $videoSrc);
     })*/

    if (jQuery.validator) {
        jQuery.extend(jQuery.validator.messages, {
            required: "Campo obrigatório!",
            remote: "Por favor, corrija este campo.",
            email: "Por favor, forneça um endereço eletrônico válido.",
            url: "Por favor, forneça uma URL válida.",
            date: "Por favor, forneça uma data válida.",
            dateISO: "Por favor, forneça uma data válida (ISO).",
            number: "Por favor, forneça um número válido.",
            digits: "Por favor, forneça somente dígitos.",
            creditcard: "Por favor, forneça um cartão de crédito válido.",
            equalTo: "Por favor, forneça o mesmo valor novamente.",
            accept: "Por favor, forneça um valor com uma extensão válida.",
            maxlength: jQuery.validator.format("Por favor, forneça não mais que {0} caracteres."),
            minlength: jQuery.validator.format("Por favor, forneça ao menos {0} caracteres."),
            rangelength: jQuery.validator.format("Por favor, forneça um valor entre {0} e {1} caracteres de comprimento."),
            range: jQuery.validator.format("Por favor, forneça um valor entre {0} e {1}."),
            max: jQuery.validator.format("Por favor, forneça um valor menor ou igual a {0}."),
            min: jQuery.validator.format("Por favor, forneça um valor maior ou igual a {0}.")
        });

        if ($(".form-validate").length > 0) {
            $.validator.setDefaults({ignore: ""});

            $(".form-validate").validate()
        }
    }

    var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000 0000' : '(00) 0000 00009';
        },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

    if ($(".phone").length > 0)
        $('.phone').mask(SPMaskBehavior, spOptions);

})
