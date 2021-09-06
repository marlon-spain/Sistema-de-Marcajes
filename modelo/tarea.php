<?php
 /**
* class tarea
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package modelo
* @private variables privadas que solo se pueden utilizar desde la misma clase que las define. 
* @int     $id             - variable $id del campo id de la tabla tareas 
* @string  $nombre_tarea   - variable $nombre_tarea del campo nombre_tarea de la tabla tareas
*/
class tarea{
         private $id;
         private $nombre_tarea;      

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
* de la tabla tareas  
* @return  $this - $id nos devuelve un valor del atributo $id de la tabla tareas
*/
    function getId() {
		return $this->id;
    }

/**
* metodo de acceso que obtiene el $nombre_tarea de la base de datos 
* de la tabla tareas  
* @return  $this - $nombre_tarea nos devuelve un valor del atributo $nombre_tarea de la tabla tareas
*/    
    function getNombre_tarea() {
		return $this->nombre_tarea;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $id
* de la tabla tareas
* @param $id - contiene informacion $id
* @int   $id - nombre del atributo = al valor al asignar $id 
* @return no - nos retorna nada
*/    
    function setId($id) {
		$this->id = $id;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $nombre_tarea
* de la tabla tareas
* @param $nombre_tarea - contiene informacion $id
* @int   $nombre_tarea - nombre del atributo = al valor al asignar $nombre_tarea 
* @return no - nos retorna nada
*/     
    function setNombre_tarea($nombre_tarea) {
		$this->nombre_tarea = $nombre_tarea;
    }
    
    
 /**
* metodo de acceso que enlista todo las tareas la base de datos 
* de la tabla tareas
* @string  $sql - nos retorna la consulta de todo las tareas de los empleados
* @string  $tareas - nos conecta con la base de datos y envia la consulta    
* @return  tareas - resultado de la consulta de la tabla avisos
*/     
    public function getAll(){
		$sql = "SELECT * FROM tareas";
		$tareas = $this->db->query($sql);
                return $tareas;
    }

 /**
* metodo de acceso que enlista todo las tareas la base de datos 
* de la tabla tareas filtrado por el id de empleado
* @string  $sql - nos retorna la consulta de todo las tareas del empleado filtrado por el id
* @string  $tarea - nos conecta con la base de datos y envia la consulta    
* @return  tarea - resultado de la consulta de la tabla avisos
*/    
    public function getOne(){
          	$sql = "SELECT * FROM tareas WHERE id={$this->getId()}";
                $tarea = $this->db->query($sql);
                //echo"sql";
                return $tarea->fetch_object();
    }


} 
?>