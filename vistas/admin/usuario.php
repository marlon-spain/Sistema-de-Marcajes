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
    <!--informacion admin-->
     <h1>Informacion detallada del Empleado</h1>
             <!--AQUI EMPIEZA LA TABLA QUE NOS ENLISTA LOS DEPARTAMENTOS DE USUARIOS-->
             <table>           
      <h2>Empresa y Departamento del Empleado</h2>                   
                                    
                    <tr>                       
                        <th>ID</th>
                        <th><strong>Alta</strong></th>
                        <th>Nombre</th>                       
                       <th>Apellidos</th>                         
                       <th>Empresa</th>                         
                       <th>Departamento</th>                         
                       <th>Horario</th> 
                       <th>Contrato</th> 
                    </tr> 
                    <!--APERTURA DEL BUCLE WHILE PARA ENLISTAR LOS USUARIOS -->
                    <?php 
                        while($usu = $usuarios->fetch_object()):
                        ?>
                    <tr>        <!--ENLACE QUE NOS DIRECCIONA A MIS MENSUAL-->             
                       <td><strong><a title="clik aqui para mas informacion sobre el empleado" 
                                href="<?= base_url ?>usuario/mis_mensual&id=<?=$usu->id?>" 
                              style="color:#2979cd;"><?=$usu->id?></a></strong></td> 
                        <td><strong><?=$usu->fecha_alta?></strong></td>
                       <td><?=$usu->nombre?></td> 
                       <td><?=$usu->apellidos?></td>
                       <td><?=$usu->nombre_empresa?></td>
                       <td><?=$usu->nombre_departamento?></td>                      
                       <td><strong><?=$usu->horario?></strong></td>
                       <td><strong><?=$usu->nombre_contrato?></strong></td>                           
                      </tr>        
               </table> 
             <!--CIERRE DE LA TABLA-->
                  <br>
                      <!--ENLACE QUE NOS DIRECCIONA A MIS MENSUAL POR MEDIO DEL ID-->  
                     <?php $url_action = base_url."usuario/mis_mensual&id=".$usu->id; ?>
                      <!--ENLACE QUE NOS DIRECCIONA A MIS TOTAL POR MEDIO DEL ID-->
                      <?php $url_actio = base_url."usuario/mis_total&id=".$usu->id; ?>
                      <!--APERTURA DEL FORMULARIO QUE LLAMA A LA ACCION MIS MESUAL POR MEDIO DEL ID-->
                    <form action="<?=$url_action?>">
               <input  type="submit"  value="Informe Mensual" />                
               </form> 
               <!--CIERRE DEL FORMULARIO-->
               <br>
               <hr>
               <br>
                <!--APERTURA DEL FORMULARIO QUE LLAMA A LA ACCION MIS TOTAL POR MEDIO DEL ID-->
                <form action="<?=$url_actio?>">
               <input  type="submit"  value="Calculo Mensual" />                
               </form> 
                <!--CIERRE DEL FORMULARIO-->
                   <br>
                    <hr>
                     <br>
                     <!--ENLACE QUE NOS REDIRECCIONA A LA PAGINA DE INICIO LISTADO-->
                  << <a href="<?=base_url?>usuario/volver" style="color:green">Volver Atras</a>
                   <div>     
                       <h3>Buscar Registros</h3>   
                    <h2> Registros del Empleado filtrado por la fecha por medio del mes trabajado</h2>
                    <br>               
                    <br>
                    <hr>
                     <br>
                       
                     <h1>Identificacion del Empleado</h1>
	             <!--APERTURA DEL FORMULARIO QUE LLAMA A LA ACCION DE BUSQUEDA POR MEDIO DE LA FECHA-->
                      
                    <?php $url_action_m = base_url."registro/busca_mes&fecha";?>                       
                    <form  action="<?=$url_action_m?>" method="post"  >                         
                    <input type="text" name="fecha" placeholder="Introduce el Mes" value="<?=isset($reg) && is_object($reg) ? $reg->fecha : ''; ?>">
                    <input type="text" name="empleado_id" placeholder="Introduce el ID del empleado" value="<?=$usu->id?>"> 
                    <input type="submit" value="Buscar Registro" > 
                        
                       </form>
                       <!--CIERRE DEL FORMULARIO-->
                     </div>  
	
  <?php endwhile;?> 
   <!--CIERRE DE EL BUCLE WHILE-->
                      </div>
