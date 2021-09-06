<?php
 /**
* class registrocontroller 
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package controller
*/
    require_once 'modelo/registro.php';
    require_once 'modelo/usuario.php';
    class registroController{     
 
/**
* es un metodo del controlador llamado por una accion para enlistar los registros
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $registro objeto que contiene las propiedades del registro del usuario de la base de datos llama al modelo getallbyuser
* @array  $_SESSION array es un metodo que nos muestra las propiedades del usuario por medio de su id     
* @return  nos incluye la vista fichar
*/        
    public function mis_registros(){
         Utils::isIdentity();
         $empleado_id=$_SESSION['identity']->id;
         $registro=new Registro();        
         $registro->setEmpleado_id($empleado_id);
         $registros=$registro->getAllByUser();           
        require_once 'vistas/empleado/fichar.php';      
    }        

/**
* es un metodo del controlador llamado por una accion para guardar un registro o el fichaje de entrada
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $registro objeto que contiene las propiedades del registro del usuario de la base de datos llama al modelo save
* que nos permite guardar o pasar los datos al modelo para actualizar la informacion de un registro  
* @array  $_SESSION array es un metodo que nos muestra las propiedades del usuario por medio de su id     
* @return  nos incluye la vista registros y si es error una vista de error
*/ 
    public function save(){
             Utils::isIdentity();  
             $empleado_id=$_SESSION['identity']->id;
             $registro = new Registro();   
             $registro->setEmpleado_id($empleado_id);                       
             $save = $registro->save();         
             if($save){  
               $_SESSION['entrada'] = "complete";       
               header("Location:".base_url.'registro/mis_registros');
         }
          else{  
              $_SESSION['entrada'] = "error";             
              require_once 'vistas/layout/error.php';           
         } 
    }        
    
/**
* es un metodo del controlador llamado por una accion para editar un registro enviando el marcaje de salida
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $registro objeto que contiene las propiedades del registro del usuario de la base de datos llama al modelo saves
* que nos permite guardar o pasar los datos al modelo para actualizar la informacion de un registro  
* @array  $_SESSION array es un metodo que nos muestra las propiedades del usuario por medio de su id     
* @return  nos incluye la vista mis_registros y si es error una vista de error
*/ 
    public function editar(){    
          Utils::isIdentity();
          $empleado_id=$_SESSION['identity']->id;
          $registro = new Registro();  
          $registro->setEmpleado_id($empleado_id);
          $save = $registro->saves();        
          if($save){  
              $_SESSION['salida'] = "complete";       
              header("Location:".base_url.'registro/mis_registros');  
          }
          else{  
             $_SESSION['salida'] = "error";             
             }      
    }
        
/**
* es un metodo del controlador llamado por una accion de actualizado edita una incidencia
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $registro objeto que contiene las propiedades del registro actualiza los datos de un registro
* llamando al modelo si consulta de actualizado save_incidencia podemos actualizar o cambiar el tipo de incidencias
* de un usuario por medio de su id
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_SESSION array es un metodo que nos muestra las propiedades del usuario por medio de su id    
* @return  nos incluye la vista mis registros
*/             
    public function editar_incidencia(){    
          Utils::isIdentity();
          $empleado_id=$_SESSION['identity']->id;      
          $incidencia_id  = isset($_POST['incidencia']) ? $_POST['incidencia'] : false;
          $registro = new Registro(); 
          $registro->setEmpleado_id($empleado_id);
          $registro->setIncidencia_id($incidencia_id);
          $save = $registro->save_incidencia();        
           if($save){
            $_SESSION['usuario'] = "complete";           
             header("Location:".base_url.'registro/mis_registros'); 
        }else{
           $_SESSION['usuario'] = "failed";
           require_once "vistas/admin/error.php";
        }
    }
        
/**
* es un metodo del controlador llamado por una accion de actualizado edita una tarea
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $registro objeto que contiene las propiedades del registro actualiza los datos de un registro
* llamando al modelo si consulta de actualizado save_tarea podemos actualizar o cambiar el tipo de tarea
* de un usuario por medio de su id
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_SESSION array es un metodo que nos muestra las propiedades del usuario por medio de su id    
* @return  nos incluye la vista mis registros
*/            
    public function editar_tarea(){    
           Utils::isIdentity();
           $empleado_id=$_SESSION['identity']->id;      
           $tarea_id  = isset($_POST['tarea']) ? $_POST['tarea'] : false;
           $registro = new Registro(); 
           $registro->setEmpleado_id($empleado_id);
           $registro->setTarea_id($tarea_id);
           $save = $registro->save_tarea();        
           if($save){
           $_SESSION['usuario'] = "complete";           
           header("Location:".base_url.'registro/mis_registros'); 
           }else{
           $_SESSION['usuario'] = "failed";
           require_once "vistas/admin/error.php";
           }
    }
    
/**
* es un metodo del controlador llamado por una accion de actualizado edita una falta
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $registro objeto que contiene las propiedades del registro actualiza los datos de un registro
* llamando al modelo si consulta de actualizado save_falta podemos actualizar o cambiar el tipo de faltas
* de un usuario por medio de su id
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_SESSION array es un metodo que nos muestra las propiedades del usuario por medio de su id    
* @return  nos incluye la vista mis registros
*/      
    public function editar_falta(){    
         Utils::isAdmin();
         if(isset($_GET['empleado_id'])){
        //se envian los datos por post 
         $empleado_id = $_GET['empleado_id'];               
         $falta_id  = isset($_POST['falta']) ? $_POST['falta'] : false;
         $registro = new Registro(); 
         $registro->setEmpleado_id($empleado_id);
         $registro->setFalta_id($falta_id);
         $save = $registro->save_falta();        
         if($save){
         $_SESSION['falta'] = "complete";           
         require_once "vistas/layout/exito.php"; 
         }else{
         $_SESSION['falta'] = "failed";
         require_once "vistas/layout/error.php";
         }
         } 
         header("Location:".base_url.'usuario/informe');
    }
        
   
 /**
* es un metodo del controlador llamado por una accion de busqueda por medio de una fecha
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $registro objeto que contiene las propiedades del registro busca los datos de un registro
* llamando al modelo si consulta de busqueda buscar_mensual podemos realizar un tipo de busqieda de registros
* de un usuario por medio de su fecha
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_SESSION array es un metodo que nos muestra las propiedades del usuario por medio de su fecha    
* @return  nos incluye la vista  buscar_mes
*/         
    public function busca_mes(){       
         //elimina por medio del id         
          Utils::isAdmin();
          if(isset($_GET['fecha'])){
          $fecha = $_GET['fecha'];
          //$empleado_id = $_GET['empleado_id'];
          $fecha  =isset($_POST['fecha']) ? $_POST['fecha'] :false; 
          $empleado_id   =isset($_POST['empleado_id']) ? $_POST['empleado_id'] : false;         
          $registro=new Registro();         
          //sacar los registros del empleado
          $registro->setFecha($fecha); 
          $registro->setEmpleado_id($empleado_id);         
          $registros=$registro->buscar_mensual();
          $regis=$registro->buscar_mensual_total();
        
          if($registros){                
                 require_once 'vistas/admin/buscar_mes.php';
				}else{	                
                  header("Location:".base_url.'usuario/listado');
                        
                  }
                }          
           }
         
           
           
}//cierre de clase
?>