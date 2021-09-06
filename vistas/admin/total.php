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
     <h1>Calculo total a pagar</h1>
             <!--APERTURA DE LA TABLA REGISTROS-->
             <table>           
      <h2>Registro total por mes</h2>                   
                                    
                    <tr>                       
                        <th>ID</th>
                        <th>Nombre</th>
                          <th>APELLIDOS</th>
                          <th>FECHA DE ALTA</th>
                           <th>SANCIONES</th>                           
                        <th>PROFESION</th>                        
                        <th>MES DE PAGA</th>
                        <th>Total</th>                        
                    </tr>
                    <!--APERTURA DEL BUCLE WHILE PARA ENLISTAR LOS USUARIOS--> 
                    <?php 
                        while($usu = $usuarios->fetch_object()):
                        ?>
                    <tr>                   
                       <td><?=$usu->id?></td>                       
                       <td><strong><?=$usu->nombre?></strong></td> 
                       <td><strong><?=$usu->apellidos?></strong></td>
                       <td><?=$usu->fecha_alta?></td>
                       <td><span><?=$usu->sanciones?></span></td>                       
                       <td><?=$usu->nombre_base?></td>                      
                       <td><strong><?=$usu->Mes?></strong></td> 
                       <td class="casilla-green"><strong>&euro;<?=$usu->Total?></strong></td>                             
                      </tr>    
                                </table>
                                    <!--CIERRE DE LA TABLA-->
                   <div>     
                       <h3>Buscar Registros</h3>   
                    <h2> Registros del Empleado filtrado por la fecha por medio del mes trabajado</h2>
                    <br>               
                    <br>
                    <hr>
                     <br>
                     <h1>Identificacion del Empleado</h1>
	             <!--APERTURA DEL FORMULARIO QUE LLAMA AL CONTROLADOR REGISTROS Y PASA LA ACCION BUSCAR FECHAS-->
                    <?php $url_action_m = base_url."registro/busca_mes&fecha"; ?>                       
                    <form  action="<?=$url_action_m?>" method="post"  >                         
                    <input type="text" name="fecha" placeholder="Introduce el Mes" value="<?=isset($reg) && is_object($reg) ? $reg->fecha : ''; ?>">
                     <input type="text" name="empleado_id" placeholder="Introduce el ID del empleado" value="<?=$usu->id?>"> 
                      <input type="submit" value="Buscar Registro" >      
                       </form>
                     <!--CIERRE DEL FORMULARIO-->
                     </div>          
                 <?php 
                 endwhile;
                   ?>                
                 <!--CIERRE DEL BUCLE WHILE-->
                      <br>
                    <hr>
                     <br>
                <!--ENLACE QUE NOS LLEVA A LA PAGINA DE LISTADO-->
                 << <a href="<?=base_url?>usuario/volver" style="color:green">Volver atras</a>           
    </div>
