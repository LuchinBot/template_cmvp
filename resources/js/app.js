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

    $('.menu-item').hover(function () {
        $('.submenu').hide()
        $(this).find('.submenu').show(); // Mostrar el submenú del menú seleccionado
    });
})