/*puse .site-header junto con .menu-principal .menu , para que así el menú no se repita en el footer*/
jQuery(document).ready(function($) {
    $('.site-header .menu-principal .menu').slicknav({
        label: "MENU", //texto del menú
        appendTo: ".site-header"
    });
});