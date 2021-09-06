
<!--SECCION DE RESTAURACION DE LA CONTRASEÑA-->
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

<section id="section_new">
  <h4>Recuperar contraseña</h4>
     
    <?php $url_action = base_url."usuario/cambiopass&nombre"; ?>          
    
        <form  action="<?=$url_action?>" method="post">
            <input type="text" name="id" placeholder="Introduce un ID" value="<?=isset($usu) && is_object($usu) ? $usu->id : ''; ?>" required> 
            <input type="text" name="nombre" placeholder="Introduce un nombre " value="<?=isset($usu) && is_object($usu) ? $usu->nombre : ''; ?>" required>
            <input type="password" name="password" placeholder="Introduce nuevo pass " value="<?=isset($usu) && is_object($usu) ? $usu->password : ''; ?>" required>   
             <input type="submit" value="Recuperar Pass" >
             <br>
           
             << <a href="<?=base_url?>">Volver</a> 
             
        </form>    
  
</section>