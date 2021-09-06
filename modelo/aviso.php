<?php
 /**
* class aviso 
*
* observaciones: 
* 
* @author   Marlon Briones Castro [marlon_b91@hotmail.com]
* @author   http://www.fct.com
* @category Proyecto desarrollo web
* @package  modelo
* @private variables privadas que solo se pueden utilizar desde la misma clase que las define. 
* @int      $id          - variable $id del campo id de la tabla avisos  
* @int      $empleado_id - variable $empleado_id del campo empleado_id de la tabla avisos 
* @string   $observacion - variable $observacion del campo observacion de la tabla avisos 
* @date     $fecha       - variable $fecha del campo fecha de la tabla avisos  
* @falta_id $falta_id    - variable $falta_id del campo falta_id de la tabla avisos 

*/
class aviso{
         private $id;
         private $empleado_id;   
         private $observacion;
         private $fecha;
         private $falta_id;  
         
    
 /**
* es un metodo llamado automaticamente cuando se crea el objeto 
* @public la funcion constructor  inyecta parametros y dependencias para construir el objeto
* @object $db - llama al modelo Database y a su metodo connect() que es la conexion a la base de datos fct
* @return no - nos retorna nada 
 */              
    public function __construct() {
      $this->db = Database::connect();
    }   
    
/**
* metodo de acceso que obtiene el $id de la base de datos 
* de la tabla avisos  
* @return  $this - $id nos devuelve un argumento o valor del atributo $id de la tabla avisos
*/
    function getId() {
                return $this->id;
    }
  
/**
* metodo de acceso que obtiene el $empleado_id de la base de datos 
* de la tabla avisos  
* @return  $this - $empleado_id nos devuelve un argumento o valor del atributo $empleado_id de la tabla avisos
*/   
    function getEmpleado_id() {
		return $this->empleado_id;
    }
 
/**
* metodo de acceso que obtiene la tabla $observacion de la base de datos 
* de la tabla avisos  
* @return  $this - $observacion nos devuelve un argumento o valor del atributo $observacion de la tabla avisos
*/    
    function getObservacion() {
		return $this->observacion;
    }
    
/**
* metodo de acceso que obtiene la $fecha de la base de datos 
* de la tabla avisos  
* @return  $this - $fecha nos devuelve un argumento o valor del atributo date $fecha de la tabla avisos
* mediante una funcion sql CURDATE() que captura la fecha del sistema
*/    
    function getFecha() {
		return $this->fecha;
    }
    
/**
* metodo de acceso que obtiene el $falta_id referencia a la tabla faltas
* de la tabla avisos
* @return  $this - $falta_id nos devuelve un argumento o valor del atributo $falta_id de la tabla avisos
*/ 
    function getFalta_id() {
		return $this->falta_id;
    }
    
/**
* metodo modificador que asignara un nuevo valor al atributo  $id
* de la tabla avisos
* @param $id - contiene informacion $id
* @int   $id - nombre del atributo = al valor al asignar $id 
* @return no - nos retorna nada
*/       
    function setId($id) {
		$this->id = $id;
    }  
    
/**
* metodo modificador que asignara un nuevo valor al atributo  $empleado_id
* de la tabla avisos
* @param $empleado_id - contiene informacion $empleado_id
* @int   $empleadoid - nombre del atributo = al valor al asignar $empleado_id
* @return no - nos retorna nada
*/ 
    function setEmpleado_id($empleado_id) {
		$this->empleado_id = $empleado_id;
    }
    
/**
* metodo modificador que asignara un nuevo valor al atributo  $observacion
* de la tabla avisos
* @param  $observacion - contiene informacion $observacion
* @string $observacion - nombre del atributo = al valor al asignar
* @return no - nos retorna nada
*/    
    function setObservacion($observacion) {
		$this->observacion = $observacion;
    } 
    
/**
* metodo modificador que asignara un nuevo valor al atributo  $fecha
* de la tabla avisos
* @param  $fecha - contiene informacion $fecha
* @date   $fecha - nombre del atributo = al valor al asignar $fecha
* @return no - nos retorna nada
*/     
    function setFecha($fecha) {
		$this->fecha = $fecha;
    }    
    
/**
* metodo modificador que asignara un nuevo valor al atributo  $falta_id
* de la tabla avisos referencia a la tabla faltas
* @param  $falta_id - contiene informacion $falta_id
* @int   $falta_id - nombre del atributo = al valor al asignar $falta_id
* @return no - nos retorna nada
*/ 
    function setFalta_id($falta_id) {
		$this->falta_id = $falta_id;
    } 
    
 /**
* metodo de acceso que enlista todo los avisos la base de datos 
* de la tabla avisos
* @string  $sql - nos retorna la consulta de todo los avisos de los empleados
* @string  $avisos - nos conecta con la base de datos y envia la consulta    
* @return  avisos - resultado de la consulta de la tabla avisos
*/    
    public function getAll(){
		$sql = "SELECT * FROM avisos";
                $avisos = $this->db->query($sql);
		return $avisos;
    }
    
  /**
* metodo de acceso que nos da datos de un empleado
* de la tabla avisos
* @string  $sql - nos retorna la consulta de los avisos de un solo empleado mediante su id
* @string  $aviso - nos conecta con la base de datos y envia la consulta      
* @return  aviso - resultado de la consultaa, nos devuelve un objeto
*/    
    public function getOne(){
		$sql = $this->db->query= "SELECT * FROM avisos WHERE id={$this->getId()}";
		$aviso = $this->db->query($sql);
                return $aviso->fetch_object();
	}
        
 /**
* metodo de acceso que inserta datos de todo los avisos la base de datos 
* @string  $sql - nos inserta nuevas filas en una tabla 
* @string  $save - nos conecta con la base de datos e inserta la consulta
* @boolean $result - si es falso nos da un error y si es verdadero nos envia el insertado de datos   
* @return  save - resultado del insertado de filas en una tabla
*/    
    public function insert_aviso(){
	        $sql = "INSERT INTO avisos 
                        VALUES(NULL, {$this->getEmpleado_id()}, '{$this->getObservacion()}',
                        CURDATE(),{$this->getFalta_id()} );";
		$save = $this->db->query($sql);
			//echo $sql;                       
		$result = false;
	          if($save){
		    $result = true;
		  }                 
                  return $result; 
	         }    
    
 /**
* metodo de acceso que enlista todo los avisos la base de datos 
* de la tabla avisos
* @string  $sql - nos retorna la consulta de todo los avisos de los empleados mediante un inner join 
* a la tabla de faltas filtrado mediante el empleado_id 
* @string  $aviso - nos conecta con la base de datos y envia la consulta    
* @return  aviso - resultado de la consulta de la tabla avisos
*/                  
    public function getAllByUser(){
	    $sql ="SELECT * FROM avisos a INNER JOIN empleados e ON a.empleado_id=e.id 
               INNER JOIN faltas f on a.falta_id=f.id 
               WHERE a.empleado_id={$this->getEmpleado_id()} and  f.id not in(1)";		
		$aviso = $this->db->query($sql);
		//echo $sql."<br>";			
		return $aviso;
	}

 /**
* metodo de acceso que enlista todo los avisos la base de datos 
* de la tabla avisos
* @string  $sql - nos retorna la consulta de todo los avisos de los empleados mediante un inner join 
* a la tabla de faltas filtrado mediante el empleado_id y la fecha actual 
* @function curdate() - Devuelve la fecha actual como un valor en el formato 'AAAA-MM-DD' o AAAAMMDD,
* @string  $aviso - nos conecta con la base de datos y envia la consulta    
* @return  aviso - resultado de la consulta de la tabla avisos
*/        
    public function historial(){
    	$sql ="SELECT * FROM avisos a INNER JOIN empleados e ON a.empleado_id=e.id
               INNER JOIN faltas f ON a.falta_id=f.id 
               WHERE a.empleado_id={$this->getEmpleado_id()} and a.fecha=curdate()";		
		$aviso = $this->db->query($sql);
		//echo $sql."<br>";        
		return $aviso;
	}
    
} 
?>