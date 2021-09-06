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
  <h1>Informacion detallada por mes trabajado del Empleado</h1>
     <!--APERTURA DE TABLA REGISTROS-->
    <table>           
      <h2>Registro mensual de un Empleado</h2>                   
        <tr>                       
          <th>ID</th>
          <th>Nombre</th>
          <th>CategoriaP Profesional</th>
          <th>FECHA/MES</th>                        
          <th>Entrada</th>
          <th>Salida</th>
          <th>Hor : Min : Seg</th>
          <th>Saldo</th>                        
        </tr>                    
        <!--APERTURA DEL BUCLE WHILE DONDE MUESTRA LOS REGISTROS DE LOS USUARIOS-->
       <?php while($usu = $usuarios->fetch_object()):?>
        <tr>                   
          <td><?=$usu->id?></td>                       
          <td><?=$usu->nombre?></td> 
          <td><?=$usu->nombre_base?></td> 
          <td><strong><?=$usu->fecha?></strong></td> 
          <td><?=$usu->entrada?></td>
          <td><?=$usu->salida?></td>
          <td><strong><?= $usu->horas?>H:
                      <?=$usu->minutos?>M:
                      <?=$usu->segundos?>S</strong></td>
          <td class="casilla-green"><strong>&euro;<?=$usu->saldo?></strong></td>        
        </tr>                   
        <?php endwhile;?>
        <!--CIERRE DEL BUCLE WHILE-->
    </table>
     <br>
     
     <br>
     <table>
         <tr><?php while($usu = $usuari->fetch_object()):?>
             <th colspan="2">SUMATORIA DEL SALDO TOTAL MENSUAL: <?= $usu->Mes?></th>
         </tr>
       
        <tr>     
            <td><strong><?= $usu->Mes?></strong></td> 
           <td class="casilla-green"><strong>&euro;<?=$usu->Total?></strong></td>         
        </tr>                   
        <?php endwhile;?>    
     </table>
     <!--CIERRE DE LA TABLA-->
     
    <br>
    <hr>
    <br>
    <!--ENLACE DONDE NOS LLEVA A LA VISTA PRINCIPAL -->
<< <a href="<?=base_url?>usuario/volver" style="color:green">Volver Atras</a>
                                   
    </div>
