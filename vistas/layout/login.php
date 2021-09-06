<!DOCTYPE HTML>
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
  <html lang="es">
    
    <!--AQUI EMPIEZA LA CABECERA-->  
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no">      
      
      <!--TITULO DEL PROYECTO-->    
      <title>Proyecto de Marlon</title>
    
      <!--ENLACE PARA LOS FICHEROS CSS-->
      <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/style.css" /> 
      <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/cookies.css" /> 
      <link href="css/cookies.css" rel="stylesheet" type="text/css" /> 


<!-- SCRIPT CONTROL DE COOKIES 
================================================== -->
<script type="text/javascript">
function controlcookies() {
         // si variable no existe se crea (al clicar en Aceptar)
localStorage.controlcookie = (localStorage.controlcookie || 0);
 
localStorage.controlcookie++; // incrementamos cuenta de la cookie
cookie1.style.display='none'; // Esconde la pol?tica de cookies
}
</script>

      
      <!--ENLACE PARA LOS FICHEROS JAVASCRIPTS-->
      <script Language=Javascript src="<?=base_url?>js/index.js"></script>                
    </head>        
    <!--AQUI TERMINA LA CABECERA-->
      
      <!--AQUI EMPIEZA EL HEADER O ENCABEZADO LOGOTIPO Y ENLACES DE INSTRUCCIONES DE USUARIO-->
      <header id="cabecera">
        <!--DIV DE LOGO D ELA APLICACION-->  
        <div id="logo">    
          <a href="">Aplicacion CHT</a>
          
        </div>    
        <div class="clearfix"></div>
        <p><?php echo date('l \t\h\e jS');?></p>
		  <p><strong>para acceder</strong> admin --> 1    ||   marlon --> 1</p>          
        
          <?php if(isset($_SESSION['admin'])): ?>
            <!--ENLACES DE INFORMACION E INSTRUCCIONES DE LA APLICACION PARA LOS USUARIOS-->
            <div id="info"> 
              <a href="<?=base_url?>usuario/manual" title="abre el manual de usuario">| Manual de Usuario</a>
              <a href="<?=base_url?>usuario/datos" title="datos de la aplicacion">| Flujo datos</a>
              <a href="<?=base_url?>usuario/red" title="topologia de red">| Mapa red</a>
              <a href="<?=base_url?>usuario/entidad" title="modelo entidad-relacion">| Modelo E-R</a>
              <a href="<?=base_url?>usuario/bd" title="modelo Base de Datos">| Diagrama BD</a>              
            </div>
          <?php endif;?>
      </header>               
               <!--para sacar el numero de registros que existen-->
               <?php $registros = Utils::showFechas(); ?>              
         <!--MENU QUE SE MUESTRA CUANDO SE LOGUEA EL ADMINISTRADOR-->             
         <!--APERTURA DEL CONDICIONAL IF, ELSEIF-->
         <?php if(isset($_SESSION['admin'])): ?>
          <!--AQUI EMPIEZA EL BLOQUE DE NAVEGACION ADMINSTRADOR-->
          <nav id="menu">
            <ul> 
              <li>
                <a href="<?=base_url?>usuario/listado">LISTADOS</a> 
              </li>
              <li>
                <a href="<?=base_url?>usuario/alta">ANTIGUOS</a> 
              </li>
              <li>
                  <a href="<?=base_url?>usuario/informe">INFORME: [<span><?=$registros->num_rows?></span>]</a>
              </li>
              <li>
                <a href="<?=base_url?>usuario/registro">REGISTRAR</a>
              </li>                           
              <li>
                <a href="<?=base_url?>usuario/logout&id=<?=$_SESSION['identity']->id?>"  >CERRAR SESION</a>
              </li>
            </ul>
          </nav>
          <!--AQUI TERMINA LA EL BLOQUE DE NAVEGACION DEL ADMINISTRADOR-->
       
      
         <!--MENU QUE MUESTRA CUANDO SE LOGUEAN LOS USUARIOS-->
         <!--CONDICIONAL ELSEIF-->
      
         <?php elseif(!isset($_SESSION['identity'])==!'admin' ):?>
          <nav id="menu">
            <ul>       
              <li>
                <a href="<?=base_url?>registro/mis_registros">FICHAR ENT./SAL.</a> 
              </li>
              <li>  
                <a href="<?=base_url?>empresa/mis_empresas">INFORMES</a> 
              </li>
              <li>
                <a href="<?=base_url?>aviso/mis_avisos">INCIDENCIAS</a>
              </li>                 
              <li>
                 <a href="<?=base_url?>usuario/logout&id=<?=$_SESSION['identity']->id?>" onclick="exit()">CERRAR SESION</a>
              </li>
            </ul>
             
          </nav>
          <!--AQUI TERMINA EL BLOQUE DE NAVEGACION DE LOS USUARIOS-->
         <?php endif;?>         
         <!--CIERRE DE LA CONDICIONAL-->
      
          <!--DIV O CLASE PARA LIMPIAR LOS FLOTADOS-->
          <div class="clearfix"></div>     
              
          <!--AQUI EMPIEZA EL BODY O CUERPO DE LA PAGINA-->
          <body onload="mueveReloj()">          
            <!--LOGUEOS DE ADMINISTRADOR Y/O USUARIOS:IDENTITY-->
            <!--PRIMERA CONDICIONAL: ESTAS VISTAS DEPENDIENDO DE QUE LOGUE NOS MUESTRA UNAS VISTAS U OTRAS-->
            <?php if(!isset($_SESSION['identity']) && !isset($_SESSION['admin'])): ?>
              <section id="section">            
                <h4>Iniciar sesion</h4>
                 <!--AQUI EMPIEZA EL FORMULARIO DEL LOGIN QUE APUNTA AL CONTROLADOR USUARIO Y PASA LA ACCION LOGIN --> 
                 <form  action="<?=base_url?>usuario/login" method="post" >      
                  <label for="nombre">Usuario</label>
                   <input type="text" placeholder="introduce tu usuario" name="nombre"/>            
                  <label for="password">contraseña</label>
                   <input type="password" placeholder="introduce tu password" name="password"/>                
               <!--SEGUNDA CONDICIONAL: DEVUELVE MENSAJE DE ERROR SI EL LOGUE ES INCORRECTO -->
               <?php if(isset($_SESSION['error_login']) && $_SESSION['error_login'] != 'complete'): ?>	
	               <strong class="alert_red">Login Incorrecto</strong>
                   <br>
               <!--SI DA UN MENSAJE DE ERROR NOS REDIRIGE A LA PAGINA DE INICIO-->
               <?php Utils::deleteSession('error_login'); ?>
               
            <?php endif; ?>
            <!--FIN DE LA SEGUNDA CONDICIONAL-->         
                   <input  type="submit"  value="Acceder" onclick="confirma()"  /> 
                 </form> 
                 <!--AQUI TERMINA EL FORMULARIO DEL LOGIN--> 
                 <br>
                   <a href="<?=base_url?>usuario/cambio">Recuperar Contraseña</a>
                   <br>
              <!--AQUI TERMINA LA SECCION DEL LOGIN-->
              </section>
            <?php endif;?> 
            <!--FIN DE LA PRIMERA CONDIIONAL-->   
              
              <!--AQUI EMPIEZA EL SIDEBAR O BARRA LATERAL-->
              <aside id="sidebar">  
               <!--CONDICIONAL SI ES LOGUEADO POR IDENTITY O ADMINISTRADOR MUESTRA INFORMACION DEL USUARIO/ADMIN -->     
               <?php if(isset($_SESSION['identity'])): ?>
                 <!--COMIENZA EL FORMUARIO DEL LOGOUT QUE APUNTA AL CONTROLADOR USUARIO Y LA ACCION LOGOUT FILTRADO POR EL ID --> 
                 <form  action="<?=base_url?>usuario/logout&id=<?=$_SESSION['identity']->id?>" method="post" >
                   <div  class="bloque">   
	                 <h2><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h2>
                     <br><hr><br>          
                     <input  type="submit" value="Cerrar Sesion"/>      
		           </div> 
                 </form>
                 <!--AQUI TERMINA EL FORMULARIO DE LOGOUT-->  
             
                <!--AQUI EMPIEZA EL SEGUNDO BLOQUE NO SMUESTRA LA HORA Y EL TURNO ACTUAL-->
                <!--PARTE DE JAVASCRIPT-->  
                <div class="bloque">
                  <h3>Hora y Fecha Actual</h3>                  
                  <h3><?php
                    $hoy = date("F j, Y");
                   echo $hoy . "&nbsp" . date("l");?></h3>
                    <form name="form_reloj">
                    <br>
                     <strong><div id="txtsaludo"></div></strong>
                     <br>
                      <input type="text" name="reloj" size="10" style="background-color :#ccc; width:70px;
                      color : black; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;"> 
                      <input type="text" name="fecha" size="10" style="background-color :#ccc; width:70px;
                      color : black; font-family : Verdana, Arial, Helvetica; font-size : 8pt; text-align : center;"> 
                    </form>             
                </div>              
               <?php endif;?>     
               <!--AQUI TERMINA LA CONDICIONAL -->
                  
                  
               <!--BUSCADOR QUE NOS MUESTRA SOLO EN EL ADMINISTRADOR-->
               <!--APERTURA DEL CONDICIONAL PARA EL ADMIN SOLO LO GESTIONA EL ADMINISTRADOR-->
               <?php if(isset($_SESSION['admin'])): ?>
                 <div  class="bloque">  
                  <!--AQUI EMPIEZA EL FORMULARIO Y APUNTA EL CONTROLADOR USUARIO Y PASA LA ACCION BUSCA FILTRADO POR EL NOMBRE -->        
                  <?php $url_action = base_url."usuario/busca&nombre"; ?>
                    <h3>Buscar Empleado</h3>
                     <form  action="<?=$url_action?>" method="post">
                      <input type="text" name="id" placeholder="Introduce un ID" value="<?=isset($usu) && is_object($usu) ? $usu->id : ''; ?>" required> 
                      <input type="text" name="nombre" placeholder="Introduce un nombre " value="<?=isset($usu) && is_object($usu) ? $usu->nombre : ''; ?>" required> <input type="submit" value="Buscar Empleado" >
                     </form>
                      
                     <!--AQUI TERMINA EL FORMULARIO--> 
                 </div>                              
               <?php endif;?>  
               <!--FIN DE LA CONDICIONAL-->
    
               <!--vista bloque muestra en los usuarios pero no en el admin-->
               <?php if(!isset($_SESSION['admin']) && isset($_SESSION['identity']) ):?>
                <div  class="bloque">                  
                  <h2>Listado </h2>
                    <hr>
                    <br>
                    <!--apertura de informacion de usuario-->
                    <table> 
                        <tr>
                         <th>IDENTIFICADOR</th>
                         <td><?=$_SESSION['identity']->id?></td>
                        </tr>
                        <tr>
                         <th>NOMBRE</th>
                         <td><?=$_SESSION['identity']->nombre?></td>                        
                        </tr>
                        <tr>
                         <th>APELLIDOS</th>
                         <td><?=$_SESSION['identity']->apellidos?></td>
                        </tr>
                         <tr>
                         <th>EMPRESA</th>
                         <td><?=$_SESSION['identity']->empresa_id?></td>
                        </tr>
                        <tr>
                         <th>TELEFONO</th>
                         <td><?=$_SESSION['identity']->telefono?></td>
                        </tr>
                        <tr>
                         <th>DEPARTAMENTO</th>
                         <td><?=$_SESSION['identity']->departamento_id?></td>
                        </tr>
                        <tr>
                         <th>ALTA</th>
                         <td><?=$_SESSION['identity']->fecha_alta?></td>
                        </tr>
                        <tr>
                         <th>BASES</th>
                         <td><?=$_SESSION['identity']->bases_id?></td>
                        </tr>
                    </table>
               <?php endif;?>   
                </div>
              </aside>
              <!--AQUI TERMINA EL SIDEBAR O LA BARRA LATERAL-->
      
                   
                   