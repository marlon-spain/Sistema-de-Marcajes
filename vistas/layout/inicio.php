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

<div id="principal">

    <h1>Bienvenido a tu Compañia Akoma</h1>   
    
<strong>INFORMACIÓN SOBRE PROTECCIÓN DE DATOS</strong><br>
<p>
<strong>Responsable de los datos</strong><br> 
<strong>Nombre:</strong> Compañia Akoma S.L.<br>
<strong>Dirección:</strong> Avda. de xxxxxxxxx<br>
<strong>Teléfono:</strong> 99 999 99 99 - 99 999 99 99<br>
<strong>Mail:</strong> akoma @ akoma.com <br>
</p>
</div>
     

         
      