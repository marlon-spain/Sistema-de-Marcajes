<?php  
 /**
* metodo para la llamada de los controladores
* @public  la funcion controllers_autoload es publica
* @param  $classname - nos da el nombre de la clase 
* @array  $classname - nos devuelve el fichero del controlador correspondiente
*/


function controllers_autoload($classname){

      $env = getenv("ENVIRONMENT");
      
      if($env == "produccion"){
      //cargar controladores en produccion
      
      require_once 'controllers/' . ucfirst($classname) . '.php';
      } 
      
      else{   
      //carga de controladores en local 
      include 'controllers/' . $classname . '.php';
      
      }
    
    }
    spl_autoload_register( 'controllers_autoload');

?>