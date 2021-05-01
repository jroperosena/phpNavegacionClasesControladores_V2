 <!--main o contenido principal -->
 <h1 class="estiloH1"> Conozca Nuestra Empresa </h1>

<section class="estiloSeccion">

<div class="contenedor40">

<p> En el siguiente menu lo llevara a unos ejercicios de logica basica, programada en PHP
           </p>

<nav class="estiloNav">
            <ul class="estiloUlTex">
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/rutaControlador.php?opc=1&subOpc=0"> Inicio </a></li>
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/rutaControlador.php?opc=1&subOpc=1"> Factorial No </a></li>
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/rutaControlador.php?opc=1&subOpc=2"> No Primo   </a></li>
                <li class="estiloLiTex"><a  class="estiloLinkTex"  href="../controlador/rutaControlador.php?opc=1&subOpc=3"> Serie Fibonacci   </a></li>
            </ul>
        </nav>


</div>

<div class="contenedor40">

<?php 
        // defino varible opcion con el valor que viede por la URL  por el metodo GET 
       // isset(VARIABLE)
       if (!isset($subVista)) 
            $subVista="algoritmosInicio.php";

        require $subVista;

        ?>



    </div>
    

</section>

<!--main o contenido principal -->