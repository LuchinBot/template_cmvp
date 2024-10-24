$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        items: 4,
        margin: 35,
        loop: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });

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

    $('#consulTramite').click(function(){
        setTimeout(()=>{
            console.log('cargando');
            $('#viewTramite .showTable').hide();

            $('#viewTramite .showSpinner').show();

        },500);

        setTimeout(()=>{
            console.log('CARGADO');
            $('#viewTramite .showSpinner').hide();
            $('#viewTramite .showTable').show();
        },2000);
    })

    console.log(123)
    
});