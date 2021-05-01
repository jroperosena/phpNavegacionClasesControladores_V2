<?php

require ("../clases/calculos.php");
$calcular = new servicioCalculos();




if ( (isset($_POST['varInt'])) && (!empty($_POST['varInt'])) ) {

    $num = intval($_POST['varInt']);
    $fac = $calcular->Fibonnacci($num);
    $respuesta = "La sucecion es:". $fac;

}


$vista = "algoritmos.php";
$subVista="formularioFib.php";

require ("../vistas/layout.php");


?>
