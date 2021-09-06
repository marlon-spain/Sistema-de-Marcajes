<?php
 /**
* class empresacontroller
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package controller
*/
require_once 'modelo/empresa.php';

class empresaController{
    
/**
* es un metodo del controlador llamado por una accion de listado de empresas
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $empresa objeto que contiene la informacion de una empresa por medio de su id llama al modelo getempresa
* @array  $_SESSION array es un metodo que nos muestra las propiedades del usuario por medio de su fecha     
* @return  nos incluye la vista de la informe
*/      
    public function mis_empresas(){
             Utils::isIdentity();
             $id=$_SESSION['identity']->id;
             //con el objeto de session nos da el id del usuario               
             $empresa=new Empresa();         
             //sacar la informacion del empleado con la empresa mediante el id
             $empresa->setid($id);
             $empresas=$empresa->getEmpresa();    

           require_once 'vistas/empleado/informe.php';     
    } 
}//cierre de clase
?>
