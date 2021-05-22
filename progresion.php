<!-- PROGRESION DE NUMEROS ASCENDENTE CON DIFERENTES COLORES -->

<?php

function armaCaja($ancho, $fondo, $contenido){
    echo "<div style ='width:$ancho; background-color:$fondo; margin:8px'>$contenido</div>";
}


for ($i=1; $i<=100; $i++){
    $colorDeFondo = 256+$i;
    $ancho = 15*$i;
    // armaCaja("200px", "#125", "caja");
    armaCaja($ancho."px", "#".$colorDeFondo, "$i");
}
?>