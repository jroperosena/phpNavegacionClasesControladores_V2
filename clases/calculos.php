<?php

class servicioCalculos {

    public function Factorial($n) {

        $factorial = 1;
    
        for ($i=1 ; $i <= $n ; $i++) {
              $factorial = $factorial * $i;
        }
           return $factorial;
    }


    public function Primo($n) {

        $aux = true;
        for ($i = 2 ; $i < $n ; $i++)
             if (($n % $i) == 0 ) {
                $aux = false;
                return;
              }
            return $aux;

            }


     public function Fibonnacci($n) {

        $primerValor=0;
        $segundoValor=1;
        $suma = 1;
        $sucesion = "0 1 ";

           
            for ($i =3 ; $i <= $n ; $i++) {
                $primerValor = $segundoValor;
                $segundoValor = $suma;
                $suma = $primerValor + $segundoValor;
                $sucesion = $sucesion." ".$suma;    
            }

            return $sucesion;

        }
            
    

     }

    
?>