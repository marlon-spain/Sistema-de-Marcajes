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
              <?php if(isset($_SESSION['aviso']) && $_SESSION['aviso'] != 'complete'): ?>            
	      <strong class="alert_red">Error: Falta por insertar algun dato !!!</strong>
              <?php endif; ?>   
         <?php Utils::deleteSession('aviso'); ?> 
<!--APERTURA DEL BLOQUE PRINCIPAL-->
<div id="principal" >
  <h1>Crear Avisos</h1>
  
  <br>
  <br>
    <!--APERTURA DEL FORMULARIO DONDE APUNTA AL CONTROLADOR AVISO Y SU ACCION SAVE_AVISO FUNCION DE GUARDADO -->
    <form  class="form" action="<?=base_url?>aviso/save_aviso" method="post" enctype="multipart/form-data" > 
        <label>En este apartado podemos crear avisos, faltas, incidencias, ect a los empleados</label>
     <!--APERTURA D ELA TABLA DE AVISOS-->      
         <!--LISTADO DE USUARIOS APUNTANDO A LA CARPETA HELPERS FICHERO UTILS-->    
         <?php $usuarios = Utils::ShowUsuarios(); ?> 
          <!--APERTURA DEL BUCLE WHILE PARA ENLISTAR LOS USUARIOS PARA UN INPUT RADIO-->
          <label>Nombres</label>
          <?php while ($usu = $usuarios->fetch_object()): ?>
           <p><input type="radio" name="usuario" value="<?= $usu->id ?>"><?= $usu->nombre ?></p>   <?=isset($pro) && is_object($pro) && $usu->id == $pro->empleado_id ? 'user' : ''; ?>   <!--CIERRE DEL BUCLE WHILE-->           
          <?php endwhile; ?>       
        
           <!--LISTADO DE FALTAS APUNTANDO A LA CARPETA HELPERS FICHERO UTILS--> 
          <?php $faltas = Utils::ShowFaltas(); ?>
             <!--APERTURA DEL BUCLE WHILE PARA ENLISTAR LAS FALTAS EN UN INPUT RADIO-->
             <label>Faltas</label>
            <?php while ($fal = $faltas->fetch_object()): ?>
              <p><input type="radio" name="falta" value="<?= $fal->id ?>"><?= $fal->nombre_falta ?></p>  
               <?=isset($pro) && is_object($pro) && $fal->id == $pro->falta_id ? 'selected' : ''; ?>                  
             <!--CIERRE DEL BUCLE WHILE-->
             <?php endwhile; ?>             
           
           <label>Observacion</label>
          <textarea name="observacion" placeholder="ESCRIBE AQUI UN MOTIVO DE INCIDENCIA HACIA UN EMPLEADO" value="<?=isset($avi) && is_object($avi) ? $avi->observacion : ''; ?>" required cols="40" rows="5" style="resize: both;"></textarea> 
       
        <input type="submit" title="ATENCION SE CREARA UNA INCIDENCIA HACIA UN EMPLEADO" value="Crear Aviso" onclick="aviso()"/> 
          </form>
          <!--CIERRDE DEL FORMULARIO-->
</div>  
<!--CIERRE DEL DIV PRINCIPAL-->





