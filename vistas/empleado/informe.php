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
<!--APERTURA DE LA CLASE PRINCIPAL-->

<div id="principal">  
    
     <h1>Informe de la EmprEsa Perteneciente</h1>
      <h2>Listado de Empleados</h2>
      <br>
      <hr>
      <br>
   <!--APERTURA DE LA TABLA PARA ENLISTAR LOS INFORMES DE LOS EMPLEADOS-->
       <table border='3'>                          
        <tr>
         <th><strong>ID</strong></th>
         <th><strong>Nombre</strong></th>
         <th><strong>APELLIDOS</strong></th>
         <th><strong>EMPRESA</strong></th>   
         <th><strong>CIUDAD</strong></th>  
         <th><strong>DIRECCION</strong></th>
         <th><strong>CODIGO_POSTAL</strong></th>
        </tr>
           <!---APERTURA DEL WHILE PARA ENLISTAR LAS EMPRESAS CON EMPLEADOS UNA UNION DE TABLAS-->
           <?php while($emp = $empresas->fetch_object()): ?>
            <tr>                     
             <td><?=$emp->id?></td>  
             <td><?=$emp->nombre?></td>
             <td><?=$emp->apellidos?></td>
             <td><?=$emp->nombre_empresa?></td>
             <td><?=$emp->ciudad?></td>
             <td><?=$emp->direccion?></td>
             <td><?=$emp->codigo_postal?></td>                                
            </tr>  
           <!--AQUI TERMINA EL BUCLE WHILE-->    
           <?php endwhile; ?>
       </table>   
       <!--AQUI TERMINA LA TABLA -->
</div>

