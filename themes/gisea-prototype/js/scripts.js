/*puse .site-header junto con .menu-principal .menu , para que así el menú no se repita en el footer*/
jQuery(document).ready(function($) {
    $('.site-header .menu-principal .menu').slicknav({
        label: "MENU", //texto del menú
        appendTo: ".site-header"
    });

    //Agregar Slider
    $('.listado-testimoniales').bxSlider({
        auto: true,
        mode: 'fade',
        controls: false
    });

    //El pinshi mapa
    /*
    const lat = document.querySelector('#lat').value;
    const lng = document.querySelector('#lng').value;
    const direccion = document.querySelector('#direccion').value;

    if (lat && lng && direccion) {
        var map = L.map('mapa').setView([lat, lng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([lat, lng]).addTo(map)
            .bindPopup(direccion)
            .openPopup();
    }
    */

    window.onscroll = () => {
        const scroll = window.scrollY; //detecta scroll y lo almacena
        const headerNav = document.querySelector('.barra-navegacion');
        //si la cantidad de scroll es mayor a, agrega la clase, si es menor, se remueve
        if (scroll > 300) {
            headerNav.classList.add('fixed-top');
        } else {
            headerNav.classList.remove('fixed-top');
        }
    }



});