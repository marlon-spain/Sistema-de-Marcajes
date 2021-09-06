<?php
 /**
* class avisocontroller 
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package controller
*/
require_once 'modelo/aviso.php';

class avisoController{
    
/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista aviso
*/    
    public function aviso(){
        Utils::isAdmin();
    require_once 'vistas/admin/aviso.php';
}

/**
* es un metodo del controlador llamado por una accion de listado de avisos
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $aviso objeto que contiene la informacion de un aviso por medio de su id llama al modelo historial
* @array  $_SESSION array es un metodo que nos muestra las propiedades del usuario por medio de su id     
* @return  nos incluye la vista de la incidencia
*/
    public function mis_avisos(){
         Utils::isIdentity();
         $empleado_id=$_SESSION['identity']->id;
         $aviso=new Aviso();         
          //sacar los registros del empleado
         $aviso->setEmpleado_id($empleado_id);
         $avisos=$aviso->historial(); 
                  //var_dump($avisos);
         require_once 'vistas/empleado/incidencia.php';          
    }     
    
/**
* es un metodo del controlador llamado por una accion de listado de avisos por medio de su id
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $aviso objeto que contiene la informacion de un aviso por medio de su id llama al modelo por su id getallbyuser
* @array  $_SESSION array es un metodo que nos muestra las propiedades del usuario por medio de su id     
* @return  nos incluye la vista de la historial
*/
    public function aviso_fecha(){
         Utils::isIdentity();
         $empleado_id=$_SESSION['identity']->id;
         $aviso=new Aviso();         
         //sacar los registros del empleado
         $aviso->setEmpleado_id($empleado_id);
         $avisos=$aviso->getAllByUser();
         //var_dump($registro); 
       require_once 'vistas/empleado/historial.php';          
    }
    
/**
* es un metodo del controlador llamado por una accion para crear un aviso al empleado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $aviso objeto que registra la informacion de un aviso destinado hacia un usuario en concreto
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista     
* @return  nos incluye la vista listado
*/
    public function save_aviso(){
          Utils::isAdmin();
          if(isset($_POST)){       
          $usuario  = isset ($_POST['usuario']) ? $_POST['usuario'] : false;
          $falta      = isset ($_POST['falta']) ? $_POST['falta'] : false;
          $observacion   = isset ($_POST['observacion']) ? $_POST['observacion'] : false;
          if($observacion && $usuario && $falta){
          $aviso = new Aviso();    
          $aviso->setEmpleado_id($usuario);
          $aviso->setFalta_id($falta); 
          $aviso->setObservacion($observacion);
          $save = $aviso->insert_aviso();      
          if($save){
                $_SESSION['aviso'] = "complete";
                require_once 'vistas/admin/listado.php';  
                }
                }
                else{
                    $_SESSION['aviso'] = "failed";
                    require_once 'vistas/admin/aviso.php';    
                    }			
            }        
    }
    
    
}//cierre de clase



?>
