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
<!--APERTURA DEL DIV PRINCIPAL-->

<div id="principal">  
  <h1>Informacion detallada por mes trabajado del Empleado</h1>
     <!--APERTURA DE LA TABLA PARA ENLISTAR MENSUAL DEL EMPLEADO-->  
     <table>           
       <h2>Registro mensual de un Empleado</h2>                   
        <tr>                       
          <th>ID</th>
          <th>Nombre</th>
          <th>FECHA/MES</th>                        
          <th>Entrada</th>
          <th>Salida</th>
          <th>H: M: S</th>
          <th>Saldo</th>
          
        </tr>                    
         <!--APERTURA DEL BUCLE WHILE PARA RECORRER LAS FILAS DE LOS REGISTROS FILTRADOS POR MESES -->
         <?php while($reg = $registros->fetch_object()):?>
            <tr>                   
              <td><?=$reg->id?></td>                       
              <td><?=$reg->nombre?></td> 
              <td><strong><?=$reg->fecha?></strong></td> 
              <td><?=$reg->entrada?></td>
              <td><?=$reg->salida?></td>              
              <td><span><?= $reg->horas?>H:
                                  <?=$reg->minutos?>M:
                                  <?=$reg->segundos?></span></td>
              <td class="casilla-green"><?=$reg->saldo?></td>
            </tr>                             
         <!--CIERRE DEL BUCLE WHILE-->
         <?php endwhile;?>
      <!--CIERRE DE LA TABLA-->         
     </table>  
     <br>
    
     <br>
      <table>                  
        <tr>   
            <?php while($reg = $regis->fetch_object()):?>
            <th colspan="2">Saldo TOTAL por mes correspondiente a: <?= $reg->Mes?></th>        
        </tr>                    
         <!--APERTURA DEL BUCLE WHILE PARA RECORRER LAS FILAS DE LOS REGISTROS FILTRADOS POR MESES -->
         
            <tr>
              <td><strong><?= $reg->Mes?></strong></td> 
              <td class="casilla-green"><strong>&euro;<?=$reg->Total?></strong></td>             
            </tr>                             
         <!--CIERRE DEL BUCLE WHILE-->
         <?php endwhile;?>
      <!--CIERRE DE LA TABLA-->         
     </table>  
     
     
     
       <br>
       <hr>
       <br>
            <!--ENLACE QUE NOS LLEVA A LA PAGINA DE LISTADO-->
                 << <a href="<?=base_url?>usuario/volver" style="color:green">Volver atras</a>   
</div>
<!--CIERRE DE LA CAPA DIV PRINCIPAL-->