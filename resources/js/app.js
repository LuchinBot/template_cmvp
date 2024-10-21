$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        items: 4, // Número de elementos visibles
        margin: 35, // Espacio entre los elementos
        loop: false, // No repetir los elementos
        nav: true, // Mostrar navegación
        navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        dots: true, // Mostrar indicadores de página
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
            clearTimeout(hideTimeout); // Limpiar el temporizador para evitar que el menú se oculte
            $('.submenu').hide(); // Ocultar todos los submenús
            $(this).find('.submenu').show(); // Mostrar el submenú del elemento seleccionado
        },
        function () {
            const submenu = $(this).find('.submenu');
            hideTimeout = setTimeout(function () {
                submenu.hide(); // Ocultar el submenú después de un pequeño retraso
            }, 300); // Ajusta el tiempo según sea necesario
        }
    );
    
    $('.img-course').click(function(){
        image = $(this).attr('data-url');
        $('#show-image').toggle();
        $('#show-image img').attr('src', image);
    });
    $('#show-image .close').click(function(){
        $('#show-image').hide();
    })
})