
<!--BLOQUE DE MENSAJE DE ERROR PARA DIFERENTES ACCIONES-->
<?php
       if (!defined('EN_CONTROLADOR'))
    {   
		/*constante definida en el controlador boleano de valor true que si pasa por el controlador nos muestra la web y si es distinto como es en este caso el if
		  nos bloquea el acceso a la exito.php mediante un mensaje que imprimimos de error*/    
	header('Status: 404 Not Found');
     echo" <html><body><h1>ERROR:</h1><h2> HTTP 404 Pagina no encontrada</h2></body></html>";
            /*mensaje de error que nos imprime para prohibir el acceso a la pagina
           y la funcion die mata el proceso para que deje de seguir mostrando contenido
           */
       die;
	}
    
    ?>
 <?php if(isset($_SESSION['busqueda_error']) && $_SESSION['busqueda_error'] != 'complete'): ?>	
	               <strong class="alert_red">Usuario no existe</strong>
                   <br>
               <!--SI DA UN MENSAJE DE ERROR NOS REDIRIGE A LA PAGINA DE INICIO-->
               <?php Utils::deleteSession('busqueda_error'); ?>
               
            <?php endif; ?>
<div id="principal">
   <h2>Error en la operación</h2>
</div>
