<?php
 /**
* class errorcontroller
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package controller
*/
class errorController{
    
 /**
* metodo que retorna mensaje de error 
* @return no - nos retorna nada mas que un mensaje
*/
	public function index(){
                 echo"<h1>Se cerro la sesion por seguridad </h1>";
                   echo"<h1>o </h1>";
		echo "<h1>La paigina que buscas no existe</h1>";
	}
}
?>