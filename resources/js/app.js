$(document).ready(function () {
    let hideTimeout;

    $('.menu-item').hover(
        function () {
            clearTimeout(hideTimeout);
            $('.submenu').hide();
            $(this).find('.submenu').show();
        },
        function () {
            const submenu = $(this).find('.submenu');
            hideTimeout = setTimeout(function () {
                submenu.hide();
            }, 300);
        }
    );

    $('.img-course').click(function () {
        image = $(this).attr('data-url');
        $('#show-image').toggle();
        $('#show-image img').attr('src', image);
    });
    $('#show-image .close').click(function () {
        $('#show-image').hide();
    })
    $('#show-comunicate .close').click(function () {
        $('#show-comunicate').hide();
    })
    $('.scroll-to-top').hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });

    $('.scroll-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 600);
        return false;
    });
    $('.section-collapse').click(function () {
        var id = $(this).attr('id');

        // Cambiar clase active-collapse
        $('.section-collapse').removeClass('active-collapse');
        $(this).addClass('active-collapse');

        // Manejo del colapso
        $('.mesa-wrapper .collapse').removeClass('show');
        $('.mesa-wrapper .collapse[data-parent="' + id + '"]').addClass('show');
    });

    $('#consulTramite').click(function () {
        // Ocultar la tabla y mostrar el spinner
        $('#viewTramite .showTable').css('display', 'none');
        $('#viewTramite .showSpinner').css('display', 'block');
        $('#viewTramite .description').css('display', 'none');
        $('#viewTramite .showSpinner').css('display', 'block');

        setTimeout(() => {
            console.log('CARGADO');
            // Ocultar el spinner y mostrar la tabla
            $('#viewTramite .showSpinner').css('display', 'none');
            $('#viewTramite .showSpinner').css('display', 'none');
            $('#viewTramite .showTable').css('display', 'block');
            //$('#viewTramite .not-found').css('display', 'block');

        }, 2000);
    });
    $('#consulCollegiate').click(function () {
        // Ocultar la tabla y mostrar el spinner
        $('#viewCollegiate .showTable').css('display', 'none');
        $('#viewCollegiate .showSpinner').css('display', 'block');
        $('#viewCollegiate .description').css('display', 'none');
        $('#viewCollegiate .showSpinner').css('display', 'block');

        setTimeout(() => {
            console.log('CARGADO');
            // Ocultar el spinner y mostrar la tabla
            $('#viewCollegiate .showSpinner').css('display', 'none');
            $('#viewCollegiate .showSpinner').css('display', 'none');
            $('#viewCollegiate .showTable').css('display', 'block');
            //$('#viewCollegiate .not-found').css('display', 'block');

        }, 2000);
    });
    $('.context i').click(function () {
        $(this).toggleClass('fa-caret-down fa-caret-up');
        $(this).parent().parent().find('.collapse').slideToggle();
    });

    /* Chart click*/
    $('#colleMas').click(function () {
        $(this).css({
            'background-color': 'var(--color-brown)',
        });
        $('#femChart').hide();
        $('.view p').remove();
        $('.showSpinner').addClass('show');
        $('.showSpinner').css('display', 'block');
        $('#colleFem').css({
            'background-color': 'var(--color-black)',
            'border': '1px solid var(--color-white)'
        });
        setTimeout(() => {
            $('.showSpinner').removeClass('show');
            $('.showSpinner').css('display', 'none');
            $('#masChart').show();
        }, 1000)
    })
    $('#colleFem').click(function () {
        $(this).css({
            'background-color': 'var(--color-brown)',
        });
        $('#masChart').hide();
        $('.view p').remove();
        $('.showSpinner').addClass('show');
        $('.showSpinner').css('display', 'block');
        $('#colleMas').css({
            'background-color': 'var(--color-black)'
        });
        setTimeout(() => {
            $('.showSpinner').removeClass('show');
            $('.showSpinner').css('display', 'none');
            $('#femChart').show();
        }, 1000)
    })

    /*RESPONSIVE */
    $('.menubar').click(function () {
        $('.header .navbar .navbar-nav').slideToggle();
    })

});