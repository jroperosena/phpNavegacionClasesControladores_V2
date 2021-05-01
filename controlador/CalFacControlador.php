<?php

require ("../clases/calculos.php");
$calcular = new servicioCalculos();




if ( (isset($_POST['varInt'])) && (!empty($_POST['varInt'])) ) {

    $num = intval($_POST['varInt']);
    $fac = $calcular->Factorial($num);
    $respuesta = "El Factorial de ".$num. " ES ".$fac;

}


$vista = "algoritmos.php";
$subVista="formularioFac.php";

require ("../vistas/layout.php");


?>
