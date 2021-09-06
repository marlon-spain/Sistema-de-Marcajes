<!DOCTYPE HTML>

  <html>
    <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>
      <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/style.css" /> 
        <div id="principal">
          <div id="texto">
            <h1>Politica de Cookie</h1> 
              <p> La presente politica de cookies tiene por finalidad informarle sobre <br>
                  las cookies que se utilizan en la p&aacute;gina web de Akoma    
              </p>
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
              <!--CONTENIDO DE LA INFORACION SOBRE LA POLITICA DE LAS COOKES-->

               <p><strong>Las Cookies</strong><br>
                Cookie es un fichero que se descarga en su ordenador al acceder a determinadas paginas web.<br>
                Las cookies permiten a una p&aacute;gina web, entre otras cosas, almacenar y recuperar informaci&oacute;n sobre 
                los h&aacute;bitos de navegaci&oacute;n de un usuario o de su equipo y, dependiendo de la informaci&oacute;n que contengan
                y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.<br>
                El navegador del usuario memoriza cookies en el disco duro solamente durante la sesi&oacute;n actual ocupando un espacio de memoria
                m&iacute;nimo y no perjudicando al ordenador. Las cookies no contienen ninguna clase de informaci&oacute;n personal espec&iacute;fica,
                y la mayor&iacute;a de las mismas se borran del disco duro al finalizar la sesi&oacute;n de navegador (las denominadas cookies 
                de sesi&oacute;n).<br>
                La mayor&iacute;a de los navegadores aceptan como est&aacute;ndar a las cookies y, con independencia de las mismas, permiten
                o impiden en los ajustes de seguridad las cookies temporales o memorizadas.
               </p>

               <p><strong>Tipos de cookies</strong><br>
                Seg&uacute;n qui&eacute;n sea la entidad que gestione el dominio desde d&oacute;nde se env&iacute;an las cookies y se traten 
                los datos que se obtengan, se pueden distinguir dos tipos: cookies propias y cookies de terceros.<br>
                Existe tambi&eacute;n una segunda clasificaci&oacute;n seg&uacute;n el plazo de tiempo que permanecen almacenadas en el navegador
                del cliente, pudiendo tratarse de cookies de sesi&oacute;n o cookies persistentes.<br>
                Por &uacute;ltimo, existe otra clasificaci&oacute;n con cinco tipos de cookies seg&uacute;n la finalidad para la que se traten los
                datos obtenidos: cookies t&eacute;cnicas, cookies de personalizaci&oacute;n, cookies de an&aacute;lisis, cookies publicitarias y cookies
                de publicidad comportamental.<br>
                Para m&aacute;s informaci&oacute;n a este respecto puede consultar la Gu&iacute;a sobre el uso de las cookies de la Agencia Espa&nacute;ola
                de Protecci&oacute;n de Datos.
               </p>

               <p><strong>Cookies utilizadas en la web</strong><br> 
                La p&aacute;gina web de Akoma utiliza Google Analytics, un servicio de anal&iacute;tica web desarrollada por Google,
                que permite la medici&oacute;n y an&aacute;lisis de la navegaci&oacute;n en las p&aacute;ginas web. En su navegador podr&aacute; observar 
                cookies de este servicio. Seg&uacute;n la tipolog&iacute;a anterior se trata de cookies propias, de sesi&oacute;n y de an&aacute;lisis.<br>
                A trav&eacute;s de la anal&iacute;tica web se obtiene informaci&oacute;n relativa al n&uacute;mero de usuarios que acceden a la web,
                el n&uacute;mero de p&aacute;ginas vistas, la frecuencia y repetici&oacute;n de las visitas, su duraci&oacute;n, el navegador utilizado,
                el operador que presta el servicio, el idioma, el terminal que utiliza y la ciudad a la que est&aacute; asignada su direcci&oacute;n 
                IP. Informaci&oacute;n que posibilita un mejor y m&aacute;s apropiado servicio por parte de este portal.<br>
                Para garantizar el anonimato, Google convertir&aacute; su informaci&oacute;n en an&oacute;nima truncando la direcci&oacute;n IP antes
                de almacenarla, de forma que Google Analytics no se usa para localizar o recabar informaci&oacute;n personal identificable
                de los visitantes del sitio. Google solo podr&aacute; enviar la informaci&oacute;n recabada por Google Analytics a terceros cuanto
                est&eacute; legalmente obligado a ello. Con arreglo a las condiciones de prestaci&oacute;n del servicio de Google Analytics, Google 
                no asociar&aacute; su direcci&oacute;n IP a ning&uacute;n otro dato conservado por Google.<br>
                Cookies de Sesi&oacute;n.<br>
                Necesarias para el correcto uso de la p&aacute;gina web, la navegaci&oacute;n de forma ininterrumpida recordando
                opciones de idioma o pa&iacute;s.<br>
                Cookies T&eacute;cnicas. Almacenan informaci&oacute;n gen&eacute;rica y an&oacute;nima que no incluye datos de car&aacute;cter personal cuyo objetivo es garantizar el funcionamiento de la web.<br>
                Cookies de Registro.<br>
                Se crean con el registro de un usuario (log-in). Se utilizan para identificar al usuario una
                vez se ha autenticado dentro de los Sitios Web.
               </p>
    
   
               <p><strong>Aceptaci&oacute;n de la pol&iacute;tica de cookies</strong><br> 
                El Usuario acepta expresamente, por la utilizaci&oacute;n de este Site, el tratamiento 
                de la informaci&oacute;n recabada en la forma y con los fines anteriormente mencionados
               </p>
  
               <p><strong>C&oacute;mo modificar la configuraci&oacute;n de las cookies</strong><br> 
                Usted puede restringir, bloquear o borrar las cookies de Akoma o cualquier otra p&aacute;gina web utilizando su navegador.<br>
                En cada navegador la operativa es diferente, la funci&oacute;n de "Ayuda" le mostrar&aacute; c&oacute;mo hacerlo.<br><br>
                   
                <!--ENLACES REFERENTES A LOS NAVEGADORES-->
                   
               <ul>
                <a href="https://support.google.com/chrome/answer/95647?hl=es" style="color:green" target="_blank">Chrome</a><br><br>
                <a href="https://support.microsoft.com/en-us/windows?ui=en-US&rs=en-001&ad=US" style="color:green" target="_blank">Explorer</a><br><br>
                <a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-
                   preferencias?redirectslug=habilitar-y-deshabilitar-cookies-que-los-sitios-we&redirectlocale=es" style="color:green" target="_blank">Firefox</a><br><br>
                <a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" style="color:green" target="_blank">Safari</a>
               </ul>
              
    
             </div>
        </div>
  </html>