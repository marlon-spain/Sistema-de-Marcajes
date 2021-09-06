<?php
 /**
* class Database - nos da la conexion a la base de datos
*
* observaciones: utiliza los componentes de conexion para realizar la conexion sql y sentencias sql
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package config
*/
class Database{     
	 /**
* metodo que conecta con la base de datos fct
* @public la funcion connect es publica
* @static la funcion connect es estatica
* @object $db objeto mysqli pasamos los parametros para su 
* @return  db nos retorna la conexion de la base de datos

*/  
      public static function connect(){
              //esta base de datos es la que se crea en local
            //$db= new mysqli("localhost:3308", "root", "", "hct");
            
          //esta base de dato esta colgado en el servidor
            $db= new mysqli("PMYSQL132.dns-servicio.com:3306", "marlon", "031132", "7775862_cht");
         
          $db->query("SET NAMES 'utf8'");
          return $db;
      }

}

