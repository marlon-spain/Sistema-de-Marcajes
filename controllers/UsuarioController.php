<?php  // php phpDocumentor.phar  -d . -t documentacion
 /**
* class usuariocontroller
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package controller
*/
require_once 'modelo/usuario.php';
require_once 'modelo/registro.php';
require_once 'modelo/aviso.php';
//require_once 'modelo/registro.php';

class usuarioController{   

    
/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista de inicio
* @return  nos incluye la vista del login
*/
public function index()   
{             
 
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista
* @return  nos incluye la vista cambio
*/
public function cambio(){    
  include 'vistas/layout/cambio.php';  
} 

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista datos
*/    
public function datos(){
     Utils::isAdmin();    
  include 'vistas/menu/datos.php';
  
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista red
*/
public function red(){
     Utils::isAdmin(); 
 include 'vistas/menu/red.php';
  
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista entidad
*/
public function entidad(){
      Utils::isAdmin(); 
  include 'vistas/menu/entidad.php';
  
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista bd
*/
public function bd(){
     Utils::isAdmin(); 
  include 'vistas/menu/bd.php';
  
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista manual
*/
public function manual(){
     Utils::isAdmin(); 
  include 'vistas/menu/manual.php';
  
}
  
/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista organigrama
*/    
public function organigrama(){  
   Utils::isAdmin(); 
 include 'vistas/menu/organigrama.php'; 
} 

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista inicio
*/
public function inicio(){
      Utils::isAdmin(); 
  require_once 'vistas/layout/inicio.php';
  
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista volver regresa a la pagina de inicio de las sesiones
*/
public function volver(){
      Utils::isAdmin(); 
  require_once 'vistas/admin/listado.php';
  
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista lopd
*/
//vista de lopd
public function lopd(){
  Utils::isIdentity(); 
  require_once 'vistas/menu/lopd.php';
  
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista cookie
*/
public function cookie(){
      Utils::isAdmin(); 
  require_once 'vistas/menu/cookie.php';
  
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista listado
*/
public function listado(){    
      Utils::isAdmin(); 
  require_once 'vistas/admin/listado.php';
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista informe
*/
public function informe(){
      Utils::isAdmin(); 
  require_once 'vistas/admin/informe.php';
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista registro
*/
public function registro(){
      Utils::isAdmin(); 
  require_once 'vistas/admin/registro.php';
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista alta
*/
public function alta(){
     Utils::isAdmin(); 
  require_once 'vistas/admin/alta.php';
}
    
/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista fichar
*/
public function fichar(){
     Utils::isAdmin(); 
  require_once 'vistas/empleado/fichar.php';
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @return  nos incluye la vista incidencia
*/
public function incidencia(){
      Utils::isAdmin(); 
  require_once 'vistas/empleado/incidencia.php';
}
    
/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario registrado de la base de datos llama al modelo getallbyuser
* @array  $_GET array get es un metodo http que se envia de forma visible por el id     
* @return  nos incluye la vista usuario
*/
public function mis_usuarios(){
     Utils::isAdmin(); 
         if(isset($_GET['id'])){
          $id = $_GET['id'];        
         $usuario=new Usuario();         
         //sacar los registros del empleado
         $usuario->setid($id);
         $usuarios=$usuario->getAllByUser();
         //var_dump($usuario);
         }
       require_once 'vistas/admin/usuario.php';
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario registrado de la base de datos llama al modelo
* getmensual 
* @array  $_GET array get es un metodo http que se envia de forma visible por el id    
* @return  nos incluye la vista mensual
*/     
public function mis_mensual(){
          Utils::isAdmin();
          if(isset($_GET['id'])){
          $id = $_GET['id'];        
          $usuario=new Usuario();         
          //sacar los registros del empleado
          $usuario->setid($id);
          $usuarios=$usuario->getMensual();
           $usuari=$usuario->getTotal();          
          //var_dump($registro);
          require_once 'vistas/admin/mensual.php';      
         }        
}

/**
* es un metodo del controlador llamado por una accion
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario llama al modelo la consulta get_total
* @array  $_GET array get es un metodo http que se envia de forma visible     
* @return  nos incluye la vista usuario
*/
public function mis_total(){
           Utils::isAdmin();
           if(isset($_GET['id'])){
           $id = $_GET['id'];        
          $usuario=new Usuario();         
          //sacar los registros del empleado
          $usuario->setid($id);
          $usuarios=$usuario->getTotal();
          //var_dump($registro);
           require_once 'vistas/admin/total.php';      
         }        
}

/**
* es un metodo del controlador llamado por una accion de registro
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario inserta los datos de registro de un usuario
* llamando al modelo si consulta de insertado save 
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @return  nos incluye la vista de listado
*/
public function save(){
    Utils::isAdmin();
    if(isset($_POST)){    
    $nombre        = isset ($_POST['nombre'])       ? $_POST['nombre']       : false;
    $apellidos     = isset ($_POST['apellidos'])    ? $_POST['apellidos']    : false;
    $telefono      = isset ($_POST['telefono'])     ? $_POST['telefono']     : false;
    $password      = isset ($_POST['password'])     ? $_POST['password']     : false;
    $empresa       = isset ($_POST['empresa'])      ? $_POST['empresa']      : false;  
    $departamento  = isset ($_POST['departamento']) ? $_POST['departamento'] : false;
    $contrato  = isset ($_POST['contrato']) ? $_POST['contrato'] : false;
    $base  = isset ($_POST['base']) ? $_POST['base'] : false;
    
    if($nombre=='admin'){
    echo"error no puede haber dos usuarios administradores ->admin";
    
    }else{
      if($nombre & $apellidos && $telefono && $password){
      $usuario = new Usuario();     
      $usuario->setNombre($nombre);
      $usuario->setApellidos($apellidos);
      $usuario->setTelefono($telefono);
      $usuario->setPassword($password);
      $usuario->setEmpresa_id($empresa);
      $usuario->setDepartamento_id($departamento);
      $usuario->setContrato_id($contrato);
      $usuario->setBases_id($base);
     
      $save = $usuario->save();      
         
      if($save){
                $_SESSION['register'] = "complete";
      }else{
		    $_SESSION['register'] = "failed";
      }
      
      }else{
		    $_SESSION['register'] = "failed";
             echo "datos vacios";
      }
      
      }
	  }else{
		    $_SESSION['register'] = "failed";
      }
        
        require_once 'vistas/admin/listado.php'; 
        //require_once 'vistas/admin/registro.php'; 
}
    
      
    
/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* llamando al modelo si consulta de actualizado edit 
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del id
* @return  nos incluye la vista listado
*/    
public function update(){
        Utils::isAdmin(); 
        if(isset($_GET['id'])){
        //se envian los datos por post 
        $id = $_GET['id'];
        $nombre        = isset($_POST['nombre'])       ? $_POST['nombre']       : false;
        $apellidos     = isset($_POST['apellidos'])    ? $_POST['apellidos']    : false;
        $telefono      = isset($_POST['telefono'])     ? $_POST['telefono']     : false;
        $empresa       = isset($_POST['empresa'])      ? $_POST['empresa']      : false;  
        $departamento  = isset($_POST['departamento']) ? $_POST['departamento'] : false;
        $contrato  = isset($_POST['contrato']) ? $_POST['contrato'] : false;
        $base  = isset($_POST['base']) ? $_POST['base'] : false;
        
        $usuario = new Usuario();
           $usuario->setId($id);    
           $usuario->setNombre($nombre);
           $usuario->setApellidos($apellidos);
           $usuario->setTelefono($telefono);
           $usuario->setEmpresa_id($empresa);
           $usuario->setDepartamento_id($departamento);
           $usuario->setContrato_id($contrato);
           $usuario->setBases_id($base);
           $usu = $usuario->edit();            
             echo'<script type="text/javascript">
              alert("Exito en el actualizado");</script>';
             require_once 'vistas/admin/listado.php';        
         }else{
               require_once 'vistas/layout/error.php';       
        }            
}  
  

/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* llamando al modelo si consulta de actualizado getone obtiene el actualizado de un mepleado por su id
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del id 
* @return  nos incluye la vista listado
*/  
public function editar(){         
            Utils::isAdmin(); 
            if(isset($_GET['id'])){
            $id = $_GET['id'];           
            $usuario = new Usuario();
            $usuario->setId($id);        
            $usu = $usuario->getOne();           
            require_once 'vistas/admin/actualizar.php';
            
            }else{
                 header('Location:'.base_url.'usuario/listado');            
            }            
}


/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* llamando al modelo si consulta de actualizado edit_dep podemos actualizar o cambiar el tipo de departamento
* de un usuario por medio de su id
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del id 
* @return  nos incluye la vista alta
*/
public function nuevo_dep(){         
             Utils::isAdmin();           
             $id  = isset($_GET['id']) ? $_GET['id'] : false;
             $departamento_id  = isset($_POST['departamento']) ? $_POST['departamento'] : false;

             $usuario = new Usuario();            
             $usuario->setid($id);
             $usuario->setDepartamento_id($departamento_id);
             $save = $usuario->edit_dep();        
             if($save){
                       $_SESSION['usuario'] = "complete";           
                        require_once "vistas/admin/alta.php";
             }else{
                   $_SESSION['usuario'] = "failed";
                    require_once "vistas/admin/alta.php";
             }
}
    

/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* llamando al modelo si consulta de actualizado edit_emp podemos actualizar o cambiar el tipo de empresas
* de un usuario por medio de su id
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del id 
* @return  nos incluye la vista alta
*/    
public function nuevo_emp(){         
           Utils::isAdmin();
           $id  = isset($_GET['id']) ? $_GET['id'] : false;
           $empresa_id  = isset($_POST['empresa']) ? $_POST['empresa'] : false;
           
           $usuario = new Usuario();            
           $usuario->setid($id);
           $usuario->setEmpresa_id($empresa_id);
           $save = $usuario->edit_emp();        
           if($save){
                     $_SESSION['usuario'] = "complete";           
                      require_once "vistas/admin/alta.php";
          
           }else{
                 $_SESSION['usuario'] = "failed";
                  require_once "vistas/admin/alta.php";
           }
}

/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* llamando al modelo si consulta de actualizado edit_con podemos actualizar o cambiar el tipo de contrato
* de un usuario por medio de su id
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del id 
* @return  nos incluye la vista alta
*/
public function nuevo_con(){         
            Utils::isAdmin();
            $id  = isset($_GET['id']) ? $_GET['id'] : false;
            $contrato_id  = isset($_POST['contrato']) ? $_POST['contrato'] : false;

            $usuario = new Usuario();            
            $usuario->setid($id);
            $usuario->setcontrato_id($contrato_id);
            $save = $usuario->edit_con();        
            if($save){
                      $_SESSION['usuario'] = "complete";           
              require_once "vistas/admin/alta.php";

           }else{
            $_SESSION['usuario'] = "failed";
             require_once "vistas/admin/alta.php";
           }
}
    
/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* esta funcion llama a edit_alta y su accion lo que realiza es dar de nuevo de alta a un empleado que fue dado de baja 
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del id 
* @return  nos incluye la vista alta
*/    
public function nueva_alta(){  
          Utils::isAdmin();
          if(isset($_GET['id'])){
          $id = $_GET['id'];          
          
          $usuario = new usuario();
          $usuario->setId($id);        
          $usu = $usuario->edit_alta();
          if($usu){
                   $_SESSION['alta'] = 'complete';
          }else{
                $_SESSION['alta'] = 'failed';
          }
          } 
          else{
               $_SESSION['alta'] = 'failed';
          }
           require_once 'vistas/admin/alta.php';
} 
     

/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* esta funcion llama a edit_baja y su accion lo que realiza es dar de baja a un empleado no lo elimina 
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del id 
* @return  nos incluye la vista listado
*/       
public function dar_baja(){
        Utils::isAdmin();      
        if(isset($_GET['id'])){ //elimina por medio del id
        $id = $_GET['id'];
        
        $usuario = new usuario();
        $usuario->setId($id);
        $delete = $usuario->edit_baja();
        if($delete){
          $_SESSION['delete'] = 'complete';
        }else{
          $_SESSION['delete'] = 'failed';
           }
        } 
        else{
        $_SESSION['delete'] = 'failed';
        }         
         require_once 'vistas/admin/listado.php';
    } 

/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* esta funcion llama a activar y su accion lo que realiza es desbloquear el acceso que se encontraba restringido
* para dar acceso a la session su valor cambia a 0 o 1   
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del id 
* @return  nos incluye la vista listado
*/       
    public function desbloquear(){
        Utils::isAdmin();      
        if(isset($_GET['id'])){ //elimina por medio del id
        $id = $_GET['id'];
        
        $usuario = new usuario();
        $usuario->setId($id);
        $delete = $usuario->activar();
        if($delete){
                    $_SESSION['activar'] = 'complete';
        }else{
              $_SESSION['activar'] = 'failed';
        }
      } 
        else{
             $_SESSION['activar'] = 'failed';
        }
         require_once 'vistas/admin/listado.php';
}

/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* esta funcion llama a desactivar y su accion lo que realiza es bloquear el acceso que se encontraba restringido
* para prohibir o restringir el acceso a la session su valor cambia a 0 o 1   
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del id 
* @return  nos incluye la vista listado
*/       
    public function bloquear(){
          Utils::isAdmin();      
          if(isset($_GET['id'])){ //elimina por medio del id
          $id = $_GET['id'];
          
          $usuario = new usuario();
          $usuario->setId($id);
          $delete = $usuario->desactivar();
          if($delete){
                      $_SESSION['desactivar'] = 'complete';
          }else{
                $_SESSION['desactivar'] = 'failed';
           }
          } 
          else{
               $_SESSION['desactivar'] = 'failed';
          }
            require_once 'vistas/admin/listado.php';
}    
    
/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* esta funcion llama a newpass para realizar un cambio de password por si se pierde o se olvida
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del nombre 
* @return  nos incluye la vista o pagina de index
*/
    public function cambiopass(){        
          if(isset($_GET['nombre'])){             
          $nombre = $_GET['nombre'];                  
          $id   =isset($_POST['id']) ? $_POST['id'] : false;
          $password   =isset($_POST['password']) ? $_POST['password'] : false;
          $nombre   =isset($_POST['nombre']) ? $_POST['nombre'] : false;
          
          $usuario = new usuario();        
          $usuario->setNombre($nombre);
          $usuario->setId($id);         
          $usuario->setPassword($password);
          $usu = $usuario->newpass();        
          echo '<script language="javascript">alert("exelente");</script>';
          
          }else{
                 echo '<script language="javascript">alert("error2");</script>';          
          }
             
}        
    
/**
* es un metodo del controlador llamado por una accion de actualizado
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario actualiza los datos de un usuario
* esta funcion llama a buscar realiza una buqueda de usario por medio de su nombre y su id
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del nombre 
* @return  nos incluye la vista alta
*/
public function busca(){        
           Utils::isAdmin();
           if(isset($_GET['nombre'])){             
           $nombre = $_GET['nombre'];           
           $nombre   =isset($_POST['nombre']) ? $_POST['nombre'] : false;
           $id   =isset($_POST['id']) ? $_POST['id'] : false;
          
           $usuario = new usuario();        
           $usuario->setNombre($nombre);
           $usuario->setId($id);
           $usu = $usuario->buscar(); 
               
           if($usu){                      
               require_once 'vistas/admin/actualizar.php';   
              echo'<script type="text/javascript">
              alert("busqueda exitosa");</script>';
			 }              
}  
    
}
   
/**
* es un metodo del controlador llamado por una accion de DELETE ESTA ACCIO ESTA PROIBIDA USARSE YA QUE 
* ELIMINA TODO REGISTRO DE USUARIO
* @public la funcion contiene una vista ademas de bloquear su acceso solo es llamada si el usuario se loguea
* @object $usuario objeto que contiene las propiedades del usuario elimina los datos de un usuario
* esta funcion llama a delete realiza un borrado de registro
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del id 
* @return  nos incluye la vista listado
*/
public function eliminar(){
        Utils::isIdentity();      
        if(isset($_GET['id'])){ //elimina por medio del id
        $id = $_GET['id'];
        
        $usuario = new usuario();
        $usuario->setId($id);
        $delete = $usuario->delete();
        if($delete){
                    $_SESSION['delete'] = 'complete';
          }else{
                $_SESSION['delete'] = 'failed';
          }
        } 
        else{
             $_SESSION['delete'] = 'failed';
        }
         require_once 'vistas/admin/listado.php';
}    
    
/**
* es un metodo del controlador llamado por una accion para el acceso a la sesion
* @public la funcion accede a una vista se se loguea admin o identity
* @object $usuario objeto que contiene las propiedades del usuario admin o identity
* esta funcion llama a login que si existe el usuario nos permite acceder a la vista de hct 
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del nombre y password 
* @return  nos incluye la vista de la aplicacion
*/
public function login(){
    Utils::isIdentity();  
       if((isset($_POST))){
       $nombre  = isset($_GET['nombre']) ? $_GET['nombre'] : false;
       $password  = isset($_GET['password']) ? $_GET['password'] : false;
      
       $usuario = new Usuario();
       $usuario->setNombre($_POST['nombre']);
       $usuario->setPassword($_POST['password']);
       $identity = $usuario->login();
          
       if($identity && is_object($identity)){
                 $_SESSION['identity'] = $identity;       
				  header("Location:".base_url.'registro/mis_registros');  
        
            if($identity->nombre == 'admin'){
                    $_SESSION['admin'] = true;                  
                      header("Location:".base_url.'usuario/listado');                            
                 }
                 }
                 else{
                   $_SESSION['error_login'] = 'Identificación fallida !!';  
                 }
       }            
} 
      
/**
* es un metodo del controlador llamado por una accion para cerrar el acceso a la sesion
* @public la funcion regresa a una vista si se cierra correctamente la sesion 
* @object $usuario objeto que contiene las propiedades del usuario admin o identity
* esta funcion llama a cerrar nos cierra la sesion abierta y la destruye 
* @array  $_POST array post es un metodo http que se envia de forma no visible los datos y de manera segura los datos
* son recogidos por el controlador y pasa los datos al modelo por medio de una consulta recoge los datos los guarda
* los pasa por el controlador y los vuelve a pasar por la vista
* @array  $_GET array get es un metodo http que se envia de forma visible por medio del nombre y password 
* @return  nos incluye la vista de la aplicacion
*/   
public function logout(){
              if(isset($_GET['id'])){ //elimina por medio del id          
              $id = $_GET['id'];              
              $usuario = new usuario();
              $usuario->setId($id);        
              $usu = $usuario->cerrar();         
              }          
               header("Location:".base_url);
               ob_end_flush();  
}  

}//cierre de clase
?>