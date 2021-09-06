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
<!--Eliminar usuario-->    
           <br>
               <?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
	<strong class="alert_red">El Empleado se ha dado de baja correctamente</strong>
        <?php Utils::deleteSession('delete'); ?> 
              <?php elseif(isset($_SESSION['desactivar']) && $_SESSION['desactivar'] == 'complete'): ?>	
        <?php Utils::deleteSession('desactivar'); ?>
	<strong class="alert_green">El Empleado fue Desactivado correctamente</strong>
              <?php elseif(isset($_SESSION['activar']) && $_SESSION['activar'] == 'complete'): ?>
              <?php Utils::deleteSession('activar'); ?> 
	<strong class="alert_blue">El Empleado fue Activado correctamente</strong>
              <?php endif; ?>               
<div id="principal" style=" height:200px; overflow: scroll;" >
          <!--crea un scroll en la parte principal de la web-->
           <h1>Gestion de Empleados</h1>
    <!--informacion admin-->
                <?php $usuarios = Utils::showUsuarios(); ?>               
    <h2>Listado de Empleados Contratados Actualmete: <span><?= $usuarios->num_rows?></span></h2>
                <br>
                <a href="<?=base_url?>usuario/registro"  class="button button-gestion" style="width: 70px">Registrar</a>      
                <hr>
                <a href="<?=base_url?>aviso/aviso"  class="button button-gestion" style="width: 90px">Crear avisos</a>
                <hr>
                <a href="<?=base_url?>usuario/alta"  class="button button-gestion" style="width: 90px">Alta usuario</a>
          
                <hr>
				<table>                               
                             <tr>
                              <th><strong>ID</strong></th>
                              <th><strong>Alta</strong></th> 
                              <th><strong>Nonmbre</strong></th>
                              <th><strong>Apellidos</strong></th>                             
                              <th><strong>Departamento</strong></th>
                              <th><strong>Empresa</strong></th>                               
                              <th><strong>Contrato</strong></th> 
                              <th><strong>Gestionar</strong></th>
                              <th><strong>Estado Usuario</strong></th>
                              <th><strong>Acciones</strong></th>                         
                            </tr>                            
                                
                               <?php while($usu = $usuarios->fetch_object()): ?>
                          <tr>                                          
                              <td><strong><a title="clik aqui para mas informacion sobre el empleado" 
                              href="<?= base_url ?>usuario/mis_usuarios&id=<?=$usu->id?>" style="color:#2979cd;"><?=$usu->id?></a></strong></td>                 <td><strong><?=$usu->fecha_alta?></strong></td>            
                              <td><?=$usu->nombre?></td>                              
                             <td><?=$usu->apellidos?></td>                             
                             <td><?=$usu->nombre_departamento?></td>
                             <td><?=$usu->nombre_empresa?></td>
                             <td><strong><?=$usu->nombre_contrato?></strong></td>                      
                        
                             <td><a href="<?=base_url?>usuario/editar&id=<?=$usu->id?>" 
                                     data-title="Permite editar informacion a un empleado"
                                  class="button button-blue" >Editar</a>                     
                            
                 <a href="<?= base_url?>usuario/dar_baja&id=<?=$usu->id?>"
                 data-title="Permite dar de baja a un empleado"
                    class="button button-red">Eliminar</a></td>
                    
                    <!--Activar/desactivar estado de usuario-->
                    <?php                      
                    if($usu->bloqueo=='1'){
                             $usu->bloqueo='Conectado';                             
                          }else{
                                $usu->bloqueo='Desconectado';
                               }
                          ?>
                    <td class="casilla-green"><strong><?=$usu->bloqueo?></strong></td>
                    
                    <td><a href="<?= base_url?>usuario/desbloquear&id=<?=$usu->id?>"
                 data-title="Permite el acceso del usuario"
                 class="button button-gestion">Activar</a>    
                              <a href="<?= base_url?>usuario/bloquear&id=<?=$usu->id?>"
                 data-title="Restringue el acceso del usuario"
                 class="button button-red">Bloquear</a></td>                               
                         </tr>                        
                               
                
                 <?php endwhile; ?>                  
                                </table> 
                
                 
                 </div>
        
          
         
                       