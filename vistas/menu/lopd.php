
<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/style.css" /> 
  <div id="principal">
    <div id="texto">
                
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
        <!--LOPD POLITICA DE PRIVACIDAD Y PROTECCION DE DATOS-->
        
      <h1>Politica de Privacidad</h1>   
        <strong>INFORMACIÓN SOBRE PROTECCIÓN DE DATOS</strong><br>
            <p>
            <strong>Responsable de los datos</strong><br> 
            <strong>Nombre:</strong> Compañia Akoma S.L.<br>
            <strong>Dirección:</strong> Avda. de xxxxxxxxx<br>
            <strong>Teléfono:</strong> 99 999 99 99 - 99 999 99 99<br>
            <strong>Mail:</strong> akoma @ akoma.com <br>
            </p>
            
            <p>
            <strong>Finalidad</strong><br> 
            Los datos por Ud proporcionados serán utilizados a fin de.
            Gestionar sus seguros.<br>
            Proporcionarle información de nuevos productos y servicios.
            Elaboraremos perfiles comerciales en base a la información facilitada a fin de ajustar los
            servicios y ofertas, no adoptándose nunca decisiones automatizadas en base a los perfiles. Los datos se
            conservarán mientras se mantenga la relación comercial y tras la finalización de la misma, hasta que
            solicite la cancelación de sus datos, con el objeto de remitirle ofertas que pudieran ser de su 
            interés y reanudar la relación profesional.
            </p>

            <p>
            <strong>Legitimación</strong> <br>
            Los datos de que disponemos son los necesarios para llevar la efectiva intermediación de los contratos
            de seguros que ha contratado con una o más aseguradoras a través de nuestra correduría, teniendo por nuestra 
            parte la consideración de responsables de los datos de conformidad con lo previsto en la Ley 26/2006 de 27 de
            Julio de Mediación en seguros.
            </p>

            <p>
            <strong>Destinatarios</strong> <br>
            Sus datos serán comunicados a las entidades aseguradoras destinatarias de los contratos, así como en caso
            de siniestro y siempre que Ud . lo autorice y con el límite de los datos afectados por el siniestro a otras
            aseguradoras.
            </p>
      
            <p>
            <strong>Derechos</strong><br> 
            Si no desea recibir comunicaciones promocionales de nuestra empresa por
            alguno o todos los medios de comunicación, puede comunicar su deseo de oponerse a la finalidad de promoción
            de nuestros productos y servicios, lo que no irá en detrimento de mantener el fin de gestionar los contratos
            de seguros intermediados por el responsable del fichero. Usted podrá solicitar la portabilidad de sus datos,
            si así lo estima conveniente a otro corredor o entidad aseguradora. En el ejercicio de los derechos
            precedentes puede dirigirse por mail a akoma @ akoma.com o a nuestras
            oficinas Avda. xxxxxxxxxx xxxxxx xxxxxxxxx, aportando 
            siempre una copia de su DNI.<br>
            La respuesta al ejercicio de derechos se realizará al domicilio que figure 
            en los contratos suscritos con nuestra correduría. En caso de que no atendamos al ejercicio de derechos
            expresados en este apartado, Ud está facultado para acudir a nuestro delegado de protección de datos, 
            quien velará por sus intereses o presentar una reclamación ante la agencia de protección de datos, Ud.
            Dispone de toda la información a efectos de esta reclamación en la página
            <a href="http://www.agpd.es">www.agpd.es</a>
            </p>
            
            <p>
            <strong>Procedencia de los datos</strong><br> 
            Los datos de que disponemos son los que nos fueron proporcionados en el momento de la contratación de las
            pólizas o petición de las tarificaciones, así como los datos derivados de las gestiones del contrato como las
            renovaciones de pólizas o siniestros acontecidos en la vigencia del contrato.<br>
            En algunos casos los datos básicos para la tarificación de un riesgo han podido ser proporcionados por un
            colectivo, previa autorización de sus miembros, en estos casos los datos solo se utilizarán conforme a las 
            indicaciones de los representantes del colectivo y dichos datos serán eliminados si así lo requieren los acuerdos 
            con el colectivo, salvo para aquellos titulares de datos, para los que se intermedien contratos de seguros, en cuyo 
            caso los derechos se regirán por el apartado anterior.
            </p>
    </div>
 </div>