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
<!--Eliminar usuario-->    
        <?php if(isset($_SESSION['alta']) && $_SESSION['alta'] == 'complete'): ?>
	<strong class="alert_green">El Empleado se ha dado de alta nuevamente correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('alta'); ?>      
<div id="principal" style=" height:200px; overflow: scroll;" >
              <!--crea un scroll en la parte principal de la web-->
           <h1>Bienvenidos a las altas empleados</h1>
    <!--informacion admin-->
                <?php $usuarios = Utils::showAltas(); ?>               
                <h2>Volver a dar Altas a empleados contratados</h2>
                <br>              
                <a href="<?=base_url?>usuario/alta"  class="button button-gestion" style="width: 90px">Alta usuario</a>
          
                <hr>
				<table>
                            <br>
                    <h3>Empleados despedidos: <strong><?=$usuarios->num_rows?></strong></h3>
                                    <br>
                             <tr>
                              <th><strong>ID</strong></th>
                              <th><strong>Alta</strong></th> 
                              <th><strong>BAJA</strong></th> 
                              <th><strong>NOMBRE</strong></th>
                              <th><strong>APELLIDOS</strong></th>                             
                              <th><strong>Departamento</strong></th>
                              <th><strong>Empresa</strong></th>                               
                              <th><strong>Contrato</strong></th> 
                              <th><strong>Acciones</strong></th>                         
                            </tr>
                              <?php 
                             /*se comprueba si la variable esta definida*/
                             /*se comprueba si hay registros o no*/   
                              if ($usuarios->num_rows !== 0):?> 
                              
                               <?php while($usu = $usuarios->fetch_object()): ?>
                          <tr>                                      
                             <td><strong><a title="clik aqui para mas informacion sobre el empleado" 
                             href="<?= base_url ?>usuario/mis_usuarios&id=<?=$usu->id?>" style="color:#2979cd;"><?=$usu->id?></a></strong></td>                 
                             <td style="color:green;"><strong><?=$usu->fecha_alta?></strong></td>            
                             <td style="color:red;"><strong><?=$usu->fecha_baja?></strong></td> 
                             <td><?=$usu->nombre?></td>
                             <td><?=$usu->apellidos?></td>
                             
                             <td><h3><?=$usu->nombre_departamento?></h3>
                                 <div class="lado">
                               <form  action="<?=base_url?>usuario/nuevo_dep&id=<?=$usu->id?>" method="post" >  
                                                                  
                    <?php $departamentos = Utils::showDepartamentos(); ?>
                    <select class="alta" name="departamento">
                        <?php while ($dep = $departamentos->fetch_object()): ?>                        
                             <option value="<?= $dep->id ?>" 
                            <?=isset($pro) && is_object($pro) &&
                            $dep->id == $pro->departamento_id ? 'selected' : ''; ?>>
                                <?= $dep->nombre_departamento ?>
                            </option>                            
                        <?php endwhile; ?>
                            </select>                             
                        <button class="boton" data-title="Elije un departamento">Marcar</button>   
                         </form>
                        </div>         
                        </td> 
                             
                        <td><h3><?=$usu->nombre_empresa?></h3>
                                  <div class="lado">
                                  <form action="<?=base_url?>usuario/nuevo_emp&id=<?=$usu->id?>" method="post" >                                                                         
                    <?php $empresas = Utils::showEmpresas(); ?>
                    <select class="alta" name="empresa">
                        <?php while ($emp = $empresas->fetch_object()): ?>
                            <option value="<?= $emp->id ?>" 
                            <?=isset($pro) && is_object($pro) &&
                            $emp->id == $pro->empresa_id ? 'selected' : ''; ?>>
                                <?= $emp->nombre_empresa ?>
                            </option>                           
                        <?php endwhile; ?>
                            </select> 
                            <button class="boton" data-title="Elije una empresa">Marcar</button>   
                                  </form>
                        </div>         
                        </td>  
                             
                             
                        <td><h3><?=$usu->nombre_contrato?></h3>
                                 <div class="lado">
                                  <form  action="<?=base_url?>usuario/nuevo_con&id=<?=$usu->id?>" method="post" >                                      
                                                                        
                    <?php $contratos = Utils::showContratos(); ?>
                    <select class="alta" name="contrato">
                        <?php while ($con = $contratos->fetch_object()): ?>
                            <option value="<?= $con->id ?>" 
                            <?=isset($pro) && is_object($pro) &&
                            $con->id == $pro->contrato_id ? 'selected' : ''; ?>>
                                <?= $con->nombre_contrato ?>
                            </option>                            
                        <?php endwhile; ?>
                        </select> 
                        <button class="boton" data-title="Elije un contrato">Marcar</button>   
                         </form>
                        </div>         
                        </td>                             
                        
                             <td><a href="<?=base_url?>usuario/nueva_alta&id=<?=$usu->id?>" 
                                  class="button button-gestion" >Alta</a>                         
                                           
                         </tr>  
                              <?php endwhile; ?>
                    <?php elseif($usuarios->num_rows == 0): ?>
                    <td colspan="9"><Strong><h2>No Existe por ahora ningun Empleado a fecha de hoy Desempleado!!!</h2></Strong></td>
                         <?php endif; ?>
                   </table>                
     
          
         
                       </div>