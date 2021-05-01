
<p class="estiloTitulo"> Numero Primo </p>

<div> 

<form action="../controlador/CalPriControlador.php" method='post'>

 <div>
      <div> <label for="" > No: </label></div>
      <div> <input type="text" name="varInt" placeholder="Aca Digite el No"></div>
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
