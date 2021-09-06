<?php
 /**
* class utils nos da ayudas en los metodos estaticos
*
* observaciones: estas funciones utiliza los metodos de los modelos de sus respectivas clases de:
 usuarios, empresa, registro, incidencia,
 departamento, aviso, contrato, falta, tarea
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package helpers
*/
class Utils{
	
/**
* borrado de sesiones 
* @public la funcion contiene una borrado de sesion cuando se actualize o recargue la pagina
* @array  $_SESSION variable que contiene el nombre de una sesion
* @function unset El comportamiento de unset dentro de una funcion puede variar dependiendo
* de que tipo de variable que se esta tratando de destruir.    
* @return  nos devuelve el nombre de la sesion
*/ 	
    public static function deleteSession($name){
       		if(isset($_SESSION[$name])){
        	$_SESSION[$name] = null;
	        unset($_SESSION[$name]);
	   	}
	        return $name;
    }
	
/**
* una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase 
* @public la funcion contiene un borrado de sesion para que no nos de fallo cuando le demos al boton de atras y no 
 * nos vuelva la pagina de la aplicacion una ves destruida la sesion
* @array  $_SESSION variable que contiene el nombre de una sesion admin  
* @return  nos retorna verdadero
*/    
    public static function isAdmin(){		
		if(!isset($_SESSION['admin'])){
		header("Location:".base_url);
		}else{
		return true;
		}
    }
	
/**
* una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase  
* @public la funcion contiene un borrado de sesion para que no nos de fallo cuando le demos al boton de atras y no 
 * nos vuelva la pagina de la aplicacion una ves destruida la sesion
* @array  $_SESSION variable que contiene el nombre de una sesion identity  
* @return  nos retorna verdadero
*/     
    public static function isIdentity(){
		if(!isset($_SESSION['identity'])){
		header("Location:".base_url);
		}else{
		return true;
		}
    }
	

 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase usuario 
* @public la funcion contiene una lista de todo los usuarios para mostrarlo por la vista invocando al modelo de usuarios
* @object usuario crea un objeto usuarios donde llama al modelo getall y nos muestra todo los usuarios   
* @return  nos retorna la lista de usuarios
*/   
    public static function showUsuarios(){
		require_once 'modelo/usuario.php';
		$usuario = new Usuario();
		$usuarios = $usuario->getAll();
		return $usuarios;
    }
        
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase usuario
* @public la funcion contiene una lista de todo las altas para mostrarlo por la vista invocando al modelo de altas
* @object usuario crea un objeto usuarios donde llama al modelo getall_bajas y nos muestra todas las altas   
* @return  nos retorna la lista de usuarios dado de altas
*/      
    public static function showAltas(){
		require_once 'modelo/usuario.php';
		$usuario = new Usuario();
		$usuarios = $usuario->getAll_bajas();
		return $usuarios;
    }
        
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase usuario
* @public la funcion contiene una lista de todo los usuarios conectados
* @object usuario crea un objeto usuarios donde llama al modelo enlinea y nos muestra todos los usuarios en linea   
* @return  nos retorna la lista de usuarios enlinea o ocnectados
*/    
    public static function showEnlinea(){
		require_once 'modelo/usuario.php';
		$usuario = new Usuario();
		$usuarios = $usuario->enlinea();
		return $usuarios;
    }

 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase empresa
* @public la funcion contiene una lista de toda las empresas registradas
* @object empresa crea un objeto empresa donde llama al modelo getall y nos muestra todos las empresa    
* @return  nos retorna la lista de empresas creadas
*/
    public static function showEmpresas(){
		require_once 'modelo/empresa.php';
		$empresa = new Empresa();
		$empresas = $empresa->getAll();
		return $empresas;
    }        
    
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase registro
* @public la funcion contiene una lista de todo los registros creados por los usuarios
* @object registro crea un objeto registro donde llama al modelo getall y nos muestra los registros creados   
* @return  nos retorna la lista de registros 
*/    
    public static function showRegistros(){
		require_once 'modelo/registro.php';
		$registro = new Registro();
                $registros = $registro->getAll();       
		return $registros;		
    }
    
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase incidencia
* @public la funcion contiene una lista de todo las incidencias registradas
* @object incidencia crea un objeto incidencia donde llama al modelo getall y nos muestra las incidencia creados   
* @return  nos retorna la lista de incidencias
*/    
    public static function showIncidencias(){
		require_once 'modelo/incidencia.php';
		$incidencia = new Incidencia();
                $incidencias = $incidencia->getAll();          
		return $incidencias;		
    }
    
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase tarea
* @public la funcion contiene una lista de todo las tareas registradas
* @object tarea crea un objeto tarea donde llama al modelo getall y nos muestra las tareas creados   
* @return  nos retorna la lista de tareas
*/    
    public static function showTareas(){
		require_once 'modelo/tarea.php';
		$tarea = new Tarea();
                $tareas = $tarea->getAll();          
		return $tareas;		
    }
        
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase registro
* @public la funcion contiene una lista de toda las fechas registradas
* @object registro crea un objeto registro donde llama al modelo gethora y nos muestra las fechas creadas   
* @return  nos retorna la lista de fechas 
*/     
    public static function showFechas(){
		require_once 'modelo/registro.php';
		$registro = new registro();
                $registros = $registro->getHora();               
	 	return $registros;
                  
    }     
    
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase departamento
* @public la funcion contiene una lista de todo los departamentos registrados
* @object departamento crea un objeto departamento donde llama al modelo getall y nos muestra los departamentos creados   
* @return  nos retorna la lista de departamentos
*/     
    public static function showDepartamentos(){
        require_once 'modelo/departamento.php';
        $departamento = new departamento();
        $departamentos = $departamento->getAll();
        return $departamentos;
    }
    
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase aviso
* @public la funcion contiene una lista de todo los avisos registrados
* @object aviso crea un aviso donde llama al modelo getall y nos muestra los avisos registrados
* @return  nos retorna la lista de avisos
*/     
    public static function showAvisos(){
        require_once 'modelo/aviso.php';
        $aviso = new Aviso();
        $avisos = $aviso->getAll();
        return $avisos;
    }
    
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase falta
* @public la funcion contiene una lista de todo las faltas registradas
* @object falta crea un objeto falta donde llama al modelo getall y nos muestra las faltas creados   
* @return  nos retorna la lista de faltas
*/     
    public static function showFaltas(){
        require_once 'modelo/falta.php';
        $falta = new Falta();
        $faltas = $falta->getAll();
        return $faltas;
    }
    
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase contrato
* @public la funcion contiene una lista de todo los contratos registradas
* @object contrato crea un objeto contrato donde llama al modelo getall y nos muestra los contratos creados   
* @return  nos retorna la lista de contratos
*/     
    public static function showContratos(){
        require_once 'modelo/contrato.php';
        $contrato = new contrato();
        $contratos = $contrato->getAll();
        return $contratos;        
    }
    
 /**
** una clase o metodos estaticos los hacen accesibles sin la necesidad de instanciar la clase base
* @public la funcion contiene una lista de todo las bases registradas
* @object base crea un objeto base donde llama al modelo getall y nos muestra las bases creadas   
* @return  nos retorna la lista de bases
*/     
    public static function showBases(){
        require_once 'modelo/bases.php';
        $base = new base();
        $bases = $base->getAll();
        return $bases;        
    }
    
    
   
    
    


	
}