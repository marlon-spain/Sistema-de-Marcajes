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
    <h1>Registrar nuevo Empleado</h1>
   <form class="form" action="<?=base_url?>usuario/save" method="post" enctype="multipart/form-data" >
                 <label for="nombre">Nombre</label>
                 <input type="text" placeholder="introduce tu nombre" name="nombre"
                        value="<?=isset($usu) && is_object($usu) ? $usu->nombre : ''; ?>" 
                        required/>
       
                 <label for="apellidos">Apellidos</label>
                    <input type="text" placeholder="introduce tus apellidos" name="apellidos" 
                           value="<?=isset($usu) && is_object($usu) ? $usu->apellidos : ''; ?>" required/>
       
                    <label for="telefono">Telefono</label>
                    <input type="number" placeholder="introduce tu telefono" name="telefono" 
                           value="<?=isset($usu) && is_object($usu) ? $usu->telefono : ''; ?>" required/>              
                        
               
                    <label for="password">Contraseña</label>
                    <input type="password" placeholder="introduce tu contraseña" name="password" required/>
                     
                    <!--Elije el empresa-->
                    <label for="empresas">Empresas</label>               
                     <?php $empresas = Utils::showEmpresas(); ?>                      
                      <!--APERTURA DEL BUCLE WHILE PARA ENLISTAR LOS USUARIOS PARA UN INPUT RADIO-->           
                        <?php while ($emp = $empresas->fetch_object()): ?>
                          <p><input type="radio" name="empresa" value="<?= $emp->id ?>"><?= $emp->nombre_empresa ?></p>
                        <?=isset($pro) && is_object($pro) && $emp->id == $pro->empresa_id ? 'user' : ''; ?>   
                      <!--CIERRE DEL BUCLE WHILE-->           
                     <?php endwhile; ?>                                
       
               <!--Elije el departamento-->
                  <label for="departamentos">Departamentos</label>               
                    <?php $departamentos = Utils::showDepartamentos(); ?>
                    <select name="departamento">
                        <?php while ($dep = $departamentos->fetch_object()): ?>
                            <option value="<?= $dep->id ?>" 
                            <?=isset($pro) && is_object($pro) && $dep->id == $pro->departamento_id ? 'selected' : ''; ?>>
                                <?= $dep->nombre_departamento ?>
                            </option>
                        <?php endwhile; ?>
                    </select>         
                  
                  
                  <!--Elije el contrato-->
                  <label for="contratos">Tipo de Contrato</label>               
                    <?php $contratos = Utils::showContratos(); ?>
                    <select  name="contrato">
                        <?php while ($con = $contratos->fetch_object()): ?>
                            <option value="<?= $con->id ?>" 
                            <?=isset($pro) && is_object($pro) && $con->id == $pro->contrato_id ? 'selected' : ''; ?>>
                                <?= $con->nombre_contrato ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                  
                  <!--Elije el categoria profesinal-->
                  <label for="bases">Categoria profesional</label>               
                    <?php $bases = Utils::showBases(); ?>
                    <select  name="base">
                        <?php while ($bas = $bases->fetch_object()): ?>
                            <option value="<?= $bas->id ?>" 
                            <?=isset($pro) && is_object($pro) && $bas->id == $pro->bases_id ? 'selected' : ''; ?>>
                                <?= $bas->nombre_base ?>
                            </option>
                        <?php endwhile; ?>
                    </select>   
                    
                   
                      
                      <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
	   <strong class="alert_green">El USUARIO se ha creado correctamente</strong>
           <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] != 'complete'): ?>	
	<strong class="alert_red">El USUARIO NO se ha creado correctamente</strong>
       <?php endif; ?>
      <?php Utils::deleteSession('register'); ?>
        
        
                        
                    <input type="submit" value="Registrar" >                       
              
                         
                    
              
                      </form>                    
                     </div>  
                   





