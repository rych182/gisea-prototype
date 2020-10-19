<?php

//[foobar]
function gisea_ubicacion_shortcode(){
    $ubicacion = get_field('ubicacion');
    ?>

    <div class="ubicacion">
        <input type="hidden" id="lat" value="<?php $ubicacion['lat'] ?>">
        <input type="hidden" id="lng" value="<?php $ubicacion['lng'] ?>">
        <input type="hidden" id="direccion" value="<?php $ubicacion['direccion'] ?>">
        <div id="mapa"></div>
    </div>

<?php
    //echo "<pre>";
    //var_dump($ubicacion);
    //echo "</pre>";
}
//foobar es el nombre del shortcode
add_shortcode( 'gisea_ubicacion', 'gisea_ubicacion_shortcode' );

?>