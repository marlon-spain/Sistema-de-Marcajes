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
<br>

 <?php if(isset($_SESSION['entrada']) && $_SESSION['entrada'] = 'complete'): ?>
  <strong class="alert_blue">Empleado <?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?> ha fichado la entrada correctamente !!!</strong>


<?php elseif(isset($_SESSION['entrada']) && $_SESSION['entrada'] == 'error'): ?>

	<strong class="alert_red">error</strong>

<?php elseif(isset($_SESSION['salida']) && $_SESSION['salida'] = 'complete'): ?>
  <strong class="alert_green">Empleado <?= $_SESSION['identity']->nombre ?> 
<?= $_SESSION['identity']->apellidos ?> ha fichado la salida correctamente !!!</strong>

<?php endif; ?>
<?php Utils::deleteSession('entrada'); ?>
<?php Utils::deleteSession('salida'); ?>
<!--AQUI EMPIEZA EL CUERPO DE LA PAGINA DE ESTE ENLACE-->
<div id="principal"> 
    <h1>Mis Registros</h1>
    <!--AQUI EMPIEZA LA TABLA QUE NOS ENLISTA LOS REGISTROS DE USUARIOS-->
    <table border ='3'>                                    
      <h1>Mis Registros de Entrada y Salida</h1>                 
                   
      <tr>
         <th>empleado_id</th>
         <th>nombre</th>
         <th>apellidos</th>
         <th>fecha</th>
         <th>Entrada</th>
         <th><strong>Incidencia</strong></th>
         <th><strong>Funcion</strong></th>
         <th>Salida</th>
         <th><strong>hor : min : seg</strong></th>
      </tr>               
        
        <?php if($registros->num_rows !== 0):?>       
        <td colspan="9"><h2>Registro de empleado</h2></td> 
        <?php while($reg = $registros->fetch_object()):?>         
      <tr>
         <td><?=$reg->empleado_id?></td> 
         <td><?=$reg->nombre?></td> 
         <td><?=$reg->apellidos?></td> 
         <td><?=$reg->fecha?></td>        
         <td><?=$reg->entrada?></td>         
         <td><?=$reg->nombre_incidencia?></td>
         <td><?=$reg->nombre_tarea?></td>
         <td><strong><?=$reg->salida?></strong></td> 
         <td><span><?= $reg->horas?>H:
                     <?=$reg->minutos?>M:
                     <?=$reg->segundos?>S</span></td>
           
      </tr>         
        <?php endwhile;?>       
        <?php elseif($registros->num_rows == 0): ?>
                    <td colspan="9"><Strong><h2>No Existe por ahora ningun Marcaje el dia de hoy!!!</h2></Strong></td>
                         <?php endif; ?>      
        
               </table>
               <!--FIN DE LA TABLA DE REGISTROS-->
                   
                    <br>
                     <hr>
                       <br>
    <!--AQUI EMPIEZA LA TABLA DE LAS INCIDENCIAS-->   
    <table border>                         
       <h2>Crear Incidencia</h2>
         <p>Selecina una Incidencia en tu Joranda laboral</p>
         <?php $incidencias = Utils::showIncidencias(); ?>
         <!--NO SMUESTRA TOD EL LISTADO DE LAS TABLAS INCIDENCIAS E TAREAS MEDIANTE LA CARPTERA HELPERS Y FICHERO UTILS.PHP-->
         <?php $tareas = Utils::showTareas(); ?>
         <br>
         
         <tr>
           <td colspan="4"><strong>Acciones</strong></td>
         </tr>
         
         <tr>
           <th><strong>FICHAR ENTRADA</strong></th>
           <th>INCIDENCIA</th>
           <th>FUNCION</th>
           <th><strong>FICHAR SALIDA</strong></th>
         </tr>
         
         <tr>
           <td>
              
             <!--AQUI COMINEZA EL FORMULARIO DONDE APUNTA AL CONTROLADOR REGISTRO Y PASA LA ACCION SAVE-->
             <form action="<?=base_url?>registro/save" method="post" >             
                 <input type="submit" title="ficha" value="Entrada" >                
                </form>
                <!--CIERRE DEL FORMULARIO-->
               
           </td>
           
           <td>
             <!--AQUI COMINEZA EL FORMULARIO DONDE APUNTA AL CONTROLADOR REGISTRO Y PASA LA ACCION editar_incidencia-->  
              <div class="lado">
             <form action="<?=base_url?>registro/editar_incidencia" method="post" >               
                 <select name="incidencia" class="alta" style="diplay:inline;">
                     <!--BUCLE PARA QUE NOS MUESTE LOS DATOS DE LA TABLA INCIDENCIAS -->   
                    <?php while ($inc = $incidencias->fetch_object()): ?>
                     <option value="<?= $inc->id ?>" 
                       <?=isset($pro) && is_object($pro) && $inc->id == $pro->empresa_id ? 'selected' : ''; ?>>
                       <?= $inc->nombre_incidencia ?>
                     </option>
                       <!--CIERRE DEL BUCLE ENDWHILE-->
                      <?php endwhile; ?>                     
                 </select>
                   <button class="boton" data-title="Elije un contrato">Incidencia</button>                                         
             </form>
              <!--CIERRE DE FORMULARIO-->   
              </div>
             </td>                      
                              
             <td>
                 <div class="lado">
                 <!--AQUI COMINEZA EL FORMULARIO DONDE APUNTA AL CONTROLADOR REGISTRO Y PASA LA ACCION EDITAR_TAREA-->
                    <form  action="<?=base_url?>registro/editar_tarea" method="post" >                 
                    <select name="tarea" class="alta" style="diplay:inline;">
                    <!--BUCLE PARA QUE NOS MUESTE LOS DATOS DE LA TABLA TAREAS --> 
                    <?php while ($tar = $tareas->fetch_object()): ?>
                      
                      <option value="<?= $tar->id ?>" 
                      <?=isset($pro) && is_object($pro) && $tar->id == $pro->tarea_id ? 'selected' : ''; ?>>
                      <?= $tar->nombre_tarea ?>
                     </option>
                    <?php endwhile; ?>
                    <!--CIERRE DE BUCLE-->                         
                  </select>
                     <button class="boton" data-title="Elije un contrato">Tarea</button>                          
                </form>
                <!--AQUI TERMINA EL FORMLARIO--> 
                 </div>
             </td>                
             
             <td>  
                  <div class="lado">
                 <!--AQUI EMPIESA EL FORMULARIO DONDE EL CONTROLADOR ES REGISTRO Y APUNTO  LA ACCION EDITAR-->
                 <form  action="<?=base_url?>registro/editar" method="post" >                    
                    <button class="boton" data-title="ficha">Salida</button>                             
                 <!--AQUI TERMINA EL FORMULARIO-->
                 </form> 
                  </div>
             </td>
               </tr>
 </table>
 <!--CIERRE DE LA TABLA --> 
 
         
</div>
<!--CIERRE D ELA CLASE PRINCIPAL-->