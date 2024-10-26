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

    $('#consulTramite').click(function() {
        // Ocultar la tabla y mostrar el spinner
        $('#viewTramite .showTable').removeClass('show');
        $('#viewTramite .showSpinner').addClass('show');
        $('#viewTramite .showSpinner').css('display', 'block');

        setTimeout(() => {
            console.log('CARGADO');
            // Ocultar el spinner y mostrar la tabla
            $('#viewTramite .showSpinner').removeClass('show');
            $('#viewTramite .showSpinner').css('display', 'none');
            $('#viewTramite .showTable').addClass('show');
        }, 2000);
    });
    $('.context i').click(function () {
        $(this).toggleClass('fa-caret-down fa-caret-up');
        $(this).parent().parent().find('.collapse').slideToggle();
    });
});