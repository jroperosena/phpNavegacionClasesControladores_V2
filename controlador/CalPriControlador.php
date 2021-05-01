<?php

require ("../clases/calculos.php");
$calcular = new servicioCalculos();




if ( (isset($_POST['varInt'])) && (!empty($_POST['varInt'])) ) {

    $num = intval($_POST['varInt']);
    $p = $calcular->Primo($num);

     if ($p)
         $respuesta = "El numero ".$num. " SI ES primo ";
         else
         $respuesta = "El numero ".$num. " NO  ES primo ";

}


$vista = "algoritmos.php";
$subVista="formularioPri.php";

require ("../vistas/layout.php");


?>
