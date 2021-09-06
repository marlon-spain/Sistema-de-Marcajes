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
  <h1>Informe de avisos Y Faltas del Empleado</h1>
    <h2>Listado de Avisos</h2>
     <br>
     <br>
    
    <!--PARETURA D ELA TABLA DONDE MUESTRA LAS FALTAS E INCIDENCISD-->
    <table border="3">                               
    <tr>                                                  
     <th><strong>ID</strong></th>
     <th><strong>NOMBRE</strong></th>
     <th><strong>APELLIDOS</strong></th>                        
     <th><strong>Fecha</strong></th>
     <th><strong>INCIDENCIA</strong></th>
     <th><strong>SANCION</strong></th>
       
    </tr> <?php if($avisos->num_rows !== 0):?>         
      <!--APERTURA DEL BUCLE WHILE LLAMA LOS DATOS DONDE ESTAN LOS AVISOS-->       
      <?php while($avi = $avisos->fetch_object()): ?>  
        
     <tr>                                                                     
       <td><?=$avi->id?></td> 
       <td><?=$avi->nombre?></td> 
       <td><?=$avi->apellidos?></td> 
       <td><strong><?=$avi->fecha?></strong></td> 
       <td id="casilla-red"><?=$avi->nombre_falta?></td> 
       <td id="casilla-red"><?=$avi->nombre_sancion?></td> 
    
        <!--CIERRE DEL BUCLE WHILE-->
       
    <?php endwhile; ?>
    <!--CIERRE DE LA TABLA--> 
        <?php else:?>
         <td colspan="7"><h2>No existe ningun Aviso o Incidencia</h2></td>
         <?php endif;?>
        </tr>   
    </table> 
    
     <br>
     <hr>
     <br>
       <!--FORMULARIO DONDE TIENE CONTROLADOR AVISO Y EL INDEX AVISO_FECHA-->
       <form  action="<?=base_url?>aviso/aviso_fecha" method="post" >                   
         <input type="submit"  value="Historial">  
       </form>
       <!--CIERRE DEL FORMULARIO-->        
    </div>
<!--CIERRE DE LA CLASE PRINCIPAL-->
