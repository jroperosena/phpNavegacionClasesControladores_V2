<?php

class servicioRutas {

    public function Ruta($i) {

        switch ($i) {
            case 0:
                $v = "home.php";
                break;
            case 1: 
                $v = "algoritmos.php";
                break;
            default:
            $v = "home.php";
            break;

        }
       
        return $v;
           
    }


    public function SubRuta($i) {

        switch ($i) {
            case 0:
                $v = "algoritmosInicio.php";
                break;
            case 1: 
                $v = "formularioFac.php";
                break;
            case 2: 
                $v = "formularioPri.php";
                break;
             case 3: 
                $v = "formularioFib.php";
                break;
            default:
            $v = "algoritmosInicio.php";
            break;

        }
       
        return $v;
           
    }

      


}
?>