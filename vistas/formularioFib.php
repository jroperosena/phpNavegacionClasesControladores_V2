
<p class="estiloTitulo"> Sucesion de Fibonnacci </p>

<div> 

<form action="../controlador/CalFibControlador.php" method='post'>

 <div>
      <div> <label for="" > La sucesion mimina es de dos numeros</label></div>
      <div> <input type="text" name="varInt" placeholder="Tamaño sucesion"></div>
 </div>

 <div> <button type="submit"> Enviar </button></div>

</form>

</div>


<div>

<?php 
       
       if (isset($respuesta)) 
          echo $respuesta;

        ?>

</div>

<!--main o contenido principal -->
