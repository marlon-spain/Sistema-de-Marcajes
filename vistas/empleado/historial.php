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
<!--APERTURA DE LA CLASE PRINCIPAL QUE MUESTRA EL CONTENIDO D ELA WEB-->
<div id="principal">
   <h1>Informe de avisos Y Faltas del Empleado</h1>
     <h2>Listado de Avisos</h2>
     <br>
     <br>
    <!--APERTURA DE LA TABLA Y SU CONTENIDO DE LA TABLA AVISOS-->
         <table>                               
           <tr>                                                  
            <th><strong>ID</strong></th>
            <th><strong>NOMBRE</strong></th>
            <th><strong>APELLIDOS</strong></th>                        
            <th><strong>Fecha</strong></th>
            <th><strong>INCIDENCIA</strong></th>
            <th><strong>SANCION</strong></th>
           </tr>
           <!--BUCLE AVISOS QUE NOS ENLISTA LOS AVISAS DE UN USUARIO ENVIADO POR EL ADMIN N-->             
           <?php while($avi = $avisos->fetch_object()): ?>      
            <tr>                                                                     
              <td><?=$avi->id?></td> 
              <td><?=$avi->nombre?></td> 
              <td><?=$avi->apellidos?></td> 
              <td><strong><?=$avi->fecha?></strong></td> 
              <td><?=$avi->nombre_falta?></td> 
              <td><?=$avi->nombre_sancion?></td> 
            </tr>  
                  <?php endwhile; ?>
                  <!--FIN DEL BUCLE WHILE-->
         </table> 
          <br>
          <hr>
          <br>
     <!--URL APUNTA AVISOS Y LLAMA CONTROLADOR AVISO CON SU INDEX DONDE ES MIS AVISOS-->          
     << <a href="<?=base_url?>aviso/mis_avisos" style="color:green">Volver Atras</a>
</div>
<!--CIERRE DE DIV PRINCIPAL-->
