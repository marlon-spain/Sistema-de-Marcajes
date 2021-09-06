
<div id="principal">
          <h1>Actualizar Datos del Empleado</h1>    

<?php isset($edit) && isset($usu) && is_object($usu); ?>
 
	<?php $url_action = base_url."usuario/update&id=".$usu->id; ?>      
                     
                    <form class="form" action="<?=$url_action = base_url."usuario/update&id=".$usu->id?>"
                    method="post" enctype="multipart/form-data" >
                        <label>Actualizacion de los datos del Empleado--> IDENTIFICADOR : <?=$usu->id?></label>                  
                    <label for="nombre" >nombre</label>
                    <input type="text"  name="nombre" value="<?=$usu->nombre;?>"required/>
       
                    <label for="apellidos">apellidos</label>
                    <input type="text"  name="apellidos" value="<?=$usu->apellidos; ?>" required/>                           
                          
                      <label for="telefono">telefono</label>
                    <input type="number"  name="telefono" value="<?=$usu->telefono; ?>" required/>  
                        
                      <label for="empresas">Empresas</label>               
                    <?php $empresas = Utils::showEmpresas(); ?>
                    <select name="empresa">
                        <?php while ($emp = $empresas->fetch_object()): ?>
                            <option value="<?= $emp->id ?>" 
                            <?=isset($pro) && is_object($pro) && $emp->id == $pro->empresa_id ? 'selected' : ''; ?>>
                                <?= $emp->nombre_empresa ?>
                            </option>
                        <?php endwhile; ?>
                    </select>         
                  
       
               
                  <label for="departamentos">Departamentos</label>               
                    <?php $departamentos = Utils::showDepartamentos(); ?>
                    <select name="departamento">
                        <?php while ($dep = $departamentos->fetch_object()): ?>
                            <option value="<?= $dep->id ?>" 
                            <?=isset($pro) && is_object($pro) &&
                            $dep->id == $pro->departamento_id ? 'selected' : ''; ?>>
                                <?= $dep->nombre_departamento ?>
                            </option>
                        <?php endwhile; ?>
                    </select>         
                 
                                       
                     
                <label for="contratos">Contratos</label>               
                    <?php $contratos = Utils::showContratos(); ?>
                    <select name="contrato">
                        <?php while ($con = $contratos->fetch_object()): ?>
                            <option value="<?= $con->id ?>" 
                            <?=isset($pro) && is_object($pro) &&
                            $con->id == $pro->contrato_id ? 'selected' : ''; ?>>
                                <?= $con->nombre_contrato ?>
                            </option>
                        <?php endwhile; ?>
                    </select> 
                    
                
                    <!--Elije el categoria profesinal-->
                  <label for="bases">Tipo de Categoria profesional</label>               
                    <?php $bases = Utils::showBases(); ?>
                    <select name="base">
                        <?php while ($bas = $bases->fetch_object()): ?>
                            <option value="<?= $bas->id ?>" 
                            <?=isset($pro) && is_object($pro) && $bas->id == $pro->bases_id ? 'selected' : ''; ?>>
                                <?= $bas->nombre_base ?>
                            </option>
                        <?php endwhile; ?>
                    </select> 
                    
                
                   
                
                    <input type="submit"  value="GRABAR" >             
                    
              
                      </form>  
        
        

                     </div>  
                   
  
  

