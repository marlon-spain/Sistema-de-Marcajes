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
<div class="clearfix"></div>
<!--PIE DE PAGINA SOLO SE MUESTRA CUNADO SE LOGUEA EL USUARIO ADMIN/IDENTITY-->
<?php if(isset($_SESSION['identity'])): ?> 
    <div class="clearfix"></div>
      <!--pie de pagina-->
        <footer id="pie">
          <p>desarrollado por marlon briones &copy; 2020 |
           <a href="<?=base_url?>usuario/lopd">Politica de Privacidad |</a>
           <a href="<?=base_url?>usuario/inicio">¿Quienes Somos? |</a> 
           <a href="<?=base_url?>usuario/organigrama"> Organigrama de la Compañoa </a>  
          </p>
        </footer>
     <!-- SCRIPT CONTROL DE COOKIES -->
    <script type="text/javascript">
      //FUNCION PARA CONTROLAR LAS COOKIES
      function controlcookies() {
      // si variable no existe se crea (al clicar en Aceptar)
      localStorage.controlcookie = (localStorage.controlcookie || 0);
      localStorage.controlcookie++; // incrementamos cuenta de la cookie
      cookie1.style.display='none'; // Esconde la política de cookies
     }
    </script>
    <!--FIN DEL SCRIPT-->

        <!--La URL incluida es la parte que se ha de modificar --> 
         
        <div class="cookiesms" id="cookie1">
        akoma.com utiliza cookies propias y de terceros para mejorar su experiencia de usuario, obtener informacion
         estadistica sobre sus habitos de navegacion y ofrecerle publicidad adaptada a sus preferencias.
        Al consentir, acepta estos usos, si bien podra retirar este consentimiento en cualquier momento a traves de las
         funciones de su navegador. <strong> <a href="<?=base_url?>usuario/cookie">Leer mas</a></strong>
         <strong><a href="#" onclick="controlcookies()" style="color:black; font-size: 15px; border:1px solid black;background: white;" >aceptar</a>
        </div>
        <script type="text/javascript">
        if (localStorage.controlcookie>0){ 
        document.getElementById('cookie1').style.bottom = '-50px';
        }
        </script>
         
        <!-- Fin del código de cookies --->         
            <?php endif;?> 

  </body>
  <!--AQUI TERMINA EL BODY-->
</html>
<!--AQUI TERMINA EL HTML-->