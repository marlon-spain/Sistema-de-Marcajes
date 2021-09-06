<?php
 /**
* class falta
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package modelo
* @private variables privadas que solo se pueden utilizar desde la misma clase que las define. 
* @int     $id             - variable $id del campo id de la tabla faltas 
* @string  $nombre_falta   - variable $nombre_falta del campo nombre_falta de la tabla faltas
* @string  $nombre_sancion - variable $nombre_sancion del campo nombre_sancion de la tabla faltas  
*/
class falta{
         private $id;
         private $nombre_falta;
         private $nombre_sancion;
      

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
* de la tabla faltas  
* @return  $this - $id nos devuelve un valor del atributo $id de la tabla faltas
*/
    function getId() {
		return $this->id;
    }
    
/**
* metodo de acceso que obtiene el $nombre_falta de la base de datos 
* de la tabla faltas  
* @return  $this - $nombre_falta nos devuelve un atributo $nombre_falta de la tabla faltas
*/    
    function getNombre_Falta() {
		return $this->nombre_falta;
    }
    
/**
* metodo de acceso que obtiene el $nombre_sancion de la base de datos 
* de la tabla faltas  
* @return  $this - $nombre_sancion nos devuelve un valor del atributo $nombre_sancion de la tabla faltas
*/    
    function getNombre_Sancion() {
		return $this->nombre_sancion;
    }
       
/**
* metodo modificador que asignara un nuevo valor al atributo  $id
* de la tabla faltas
* @param $id - contiene informacion $id
* @int   $id - nombre del atributo = al valor al asignar $id 
* @return no - nos retorna nada
*/    
    function setId($id) {
		$this->id = $id;
    }
    
/**
* metodo modificador que asignara un nuevo valor al atributo  $nombre_falta
* de la tabla faltas
* @param $nombre_falta - contiene informacion $nombre_falta
* @int   $nombre_falta - nombre del atributo = al valor al asignar $nombre_falta 
* @return no - nos retorna nada
*/     
    function setNombre_Falta($nombre_falta) {
		$this->nombre_falta = $nombre_falta;
    }
    
/**
* metodo modificador que asignara un nuevo valor al atributo  $nombre_sancion
* de la tabla faltas
* @param $nombre_sancion - contiene informacion $nombre_sancion
* @int   $nombre_sancion - nombre del atributo = al valor al asignar $nombre_sancion 
* @return no - nos retorna nada
*/     
    function setNombre_Sancion($nombre_sancion) {
		$this->nombre_sancion = $nombre_sancion;
    }
    
 /**
* metodo de acceso que enlista todo las faltas la base de datos 
* de la tabla faltas
* @string  $sql - nos retorna la consulta de todo los faltas de los empleados
* @string  $faltas - nos conecta con la base de datos y envia la consulta    
* @return  faltas - resultado de la consulta de la tabla faltas
*/  
    public function getAll(){
                $sql = "SELECT * FROM faltas";
		$faltas = $this->db->query($sql);
                return $faltas;
    }

 /**
* metodo de acceso que enlista todo las faltas la base de datos 
* de la tabla faltas
* @string  $sql - nos retorna la consulta de todo los faltas de los empleados filtrado por el empleado_id
* @string  $faltas - nos conecta con la base de datos y envia la consulta    
* @return  faltas - resultado de la consulta de la tabla faltas
*/         
    public function getOne(){
		$falta = "SELECT * FROM faltas WHERE id={$this->getId()}";
		$falta = $this->db->query($sql);
                return $falta->fetch_object();
    }


} 
?>