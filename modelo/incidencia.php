<?php
 /**
* class incidencia 
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package modelo
* @private variables privadas que solo se pueden utilizar desde la misma clase que las define. 
* @int     $id                - variable $id del campo id de la tabla inidencias 
* @string  $nombre_incidencia - variable $nombre_incidencia del campo nombre_incidencia de la tabla incidencias  
*/
class incidencia{
         private $id;
         private $nombre_incidencia;
      

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
* de la tabla incidencias  
* @return  $this - $id nos devuelve un valor del atributo $id de la tabla incidencias
*/    
    function getId() {
		return $this->id;
    }

/**
* metodo de acceso que obtiene el $nombre_incidencia de la base de datos 
* de la tabla incidencias  
* @return  $this - $nombre_incidencia nos devuelve un argumento del atributo $nombre_incidencia de la tabla incidencias
*/    
    function getNombre_incidencia() {
		return $this->nombre_incidencia;
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
* metodo modificador que asignara un nuevo valor al atributo  $nombre_incidencia
* de la tabla incidencia
* @param $nombre_incidencia - contiene informacion $nombre_incidencia
* @int   $nombre_incidencia - nombre del atributo = al valor al asignar $nombre_incidencia 
* @return no - nos retorna nada
*/    
    function setNombre_Incidencia($nombre_incidencia) {
		$this->nombre_incidencia = $nombre_incidencia;
    }
    
 /**
* metodo de acceso que enlista todo las incidencias de la base de datos 
* de la tabla incidencias
* @string  $sql - nos retorna la consulta de todo las incidencias de los empleados
* @string  $incidenciass - nos conecta con la base de datos y envia la consulta    
* @return  incidencias - resultado de la consulta de la tabla incidencias
*/ 
    public function getAll(){
		$sql = "SELECT * FROM incidencias";
		$incidencias = $this->db->query($sql);
                return $incidencias;
    }

 /**
* metodo de acceso que enlista la incidencia del empleado filtradopor el id de la base de datos 
* de la tabla incidencias
* @string  $sql - nos retorna la consulta de la incidencia del empleado filtrado por el id del empleado
* @string  $incidencias - nos conecta con la base de datos y envia la consulta    
* @return  incidencias - resultado de la consulta de la tabla incidencias
*/    
    public function getOne(){
		$sql = "SELECT * FROM incidencias WHERE id={$this->getId()}";
		$incidencia = $this->db->query($sql);
                return $incidencia->fetch_object();
    }

} 
?>