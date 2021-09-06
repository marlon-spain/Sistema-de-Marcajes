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
<!--listado de informe000-->     
<div id="principal">
     
        <!--informacion admin-->
                <?php $registros = Utils::showFechas(); ?>

           <h1>Informe de Asistencia de Empleados</h1>
             <h2>Listado de Asistencias de los empleados a fecha actual <?=$registros->num_rows?> </h2>                      
                
				<table>                   
                             <tr>                             
                              <th>Nombre</th>
                              <th>Apellidos</th>                 
                              <th><strong>Incidencia</strong></th>        
                              <th><strong>Fecha</strong></th>
                              <th><strong>Entrada</strong></th>
                              <th><strong>Salida</strong></th>
                              <th><strong>H:M:S</strong></th>                              
                              <th><strong>Total</strong></th>
                              <th><strong>Multa</strong></th>
                              <th><strong>Saldo</strong></th>
                            </tr>  
                            <?php 
                    /*se comprueba si la variable esta definida*/
                         if ($registros->num_rows !== 0):?>                        
                           <?php while($reg = $registros->fetch_object()): ?>     
                            <br>
                          <tr>                                                                     
                              <td><?=$reg->nombre?></td>                         
                              <td><?=$reg->apellidos?></td>                                
               
            
              
           <td title="este usuario tiene una sancion de: &euro; <?=$reg->multa?>"><h3><?=$reg->nombre_falta?></h3>
               <div class="lado">
               <?php $faltas = Utils::showFaltas(); ?> 
             <!--AQUI COMINEZA EL FORMULARIO DONDE APUNTA AL CONTROLADOR REGISTRO Y PASA LA ACCION editar_incidencia-->   
             <form action="<?=base_url?>registro/editar_falta&empleado_id=<?=$reg->empleado_id?>" method="post" >               
                 <select name="falta" class="alta" style="diplay:inline;">
                     <!--BUCLE PARA QUE NOS MUESTE LOS DATOS DE LA TABLA INCIDENCIAS -->   
                    <?php while ($fal = $faltas->fetch_object()): ?>
                     <option value="<?= $fal->id ?>" 
                       <?=isset($pro) && is_object($pro) && $fal->id == $pro->falta_id ? 'selected' : ''; ?>>
                       <?= $fal->nombre_falta ?>
                     </option>
                       <!--CIERRE DEL BUCLE ENDWHILE-->
                      <?php endwhile; ?>                     
                 </select>      
                  <button class="boton" data-title="Elije un contrato">Marcar</button> 
             </form>
              <!--CIERRE DE FORMULARIO-->      
              </div>   
                               </td>
                               
                               <td><span><?=$reg->fecha?></span></td>
                              <td><strong><?=$reg->entrada?></strong></td>
                              <td><strong><?=$reg->salida?></strong></td>
                              <td><?= $reg->horas?>H:
                                  <?=$reg->minutos?>M:
                                  <?=$reg->segundos?></td>
                               <td class="casilla-green"><h3><strong>&euro;<?=$reg->total?></strong></h3>
                              <td><strong><span>&euro;<?=$reg->multa?></span></strong></td>                           
                              <td class="casilla-green"><strong>&euro;<?=$reg->saldo?></strong></td>
                              
                         </tr>                    
                            <?php endwhile; ?> 
                         <?php elseif($registros->num_rows == 0): ?>
                    <td colspan=9><Strong><h2>No Existe por ahora ningun Marcaje el dia de hoy!!!</h2></Strong></td>
                         <?php endif; ?>
                  
                   </table>  
   
    <br>
    <br>
    <br>
    <h1>Usuarios Enlinea</h1>
             <h2>Listado de empleados conectados en su puesto de trabajo</h2>
             <br>
          
           
    <!--informacion admin-->
                <?php $usuarios = Utils::showenlinea(); ?>  
                                
				<table>                               
                             <tr>                             
                              <th><strong>ONLINE</strong></th>
                              <th><strong>NOMBRE</strong></th>
                              <th><strong>APELLIDOS</strong></th>                        
                              <th><strong>TELEFONO</strong></th>
                              <th><strong>FECHA ALTA</strong></th>
                              <th><strong>ACTIVO</strong></th>                          
                            </tr>                            
                           <?php while($usu = $usuarios->fetch_object()): ?>      
                          <tr> 
                              <td><img class="pelota" src="<?=base_url?>/assets/img/inline.png"/></td>
                              <td class="casilla-green"><?=$usu->nombre?></td>                         
                               <td class="casilla-green"><?=$usu->apellidos?></td>                              
                              <td class="casilla-green"><?=$usu->telefono?></td>
                              <td><span><?=$usu->fecha_alta?></span></td>
                              <td><h3><?=$usu->online?></h3></td>
                             
                         </tr>  
                              <?php endwhile; ?>                  
                   
                   </table>  
           </div>

