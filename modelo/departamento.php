<?php
 /**
* class departamento 
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package modelo
* @private variables privadas que solo se pueden utilizar desde la misma clase que las define. 
* @int      $id              - variable $id del campo id de la tabla departamentos 
* @string   $nombre_departamento - variable $nombre_departamento del campo nombre_departamento de la tabla departamentos  
*/
class departamento{
         private $id;
         private $nombre_departamento;
      
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
* de la tabla departamentos  
* @return  $this - $id nos devuelve un  valor del atributo $id de la tabla departamentos
*/
    function getId() {
	    return $this->id;
    }

/**
* metodo de acceso que obtiene el $nombre_departamento de la base de datos 
* de la tabla departamentos  
* @return  $this - $nombre_departamento nos devuelve un argumento o valor del atributo $nombre_departamento de la tabla departamentos
*/    
    function getNombre_Departamento() {
		return $this->nombre_departamento;
    }    
   
/**
* metodo de acceso que obtiene el $id de la base de datos 
* de la tabla departamentos 
* @return  $this - $id nos devuelve un valor del atributo $id de la tabla departamentos
*/     
    function setId($id) {
		$this->id = $id;
    }
 
/**
* metodo de acceso que obtiene el $nombre_departamento de la base de datos 
* de la tabla departamentos  
* @return  $this - $nombre_departamento nos devuelve un argumento o valor del atributo $nombre_departamento de la tabla departamentos
*/     
    function setNombre_Departamento($nombre_departamento) {
		$this->nombre_departamento = $nombre_departamento;
    }
    
 /**
* metodo de acceso que enlista todo los avisos la base de datos 
* de la tabla avisos
* @string  $sql - nos retorna la consulta de todo los avisos de los empleados
* @string  $avisos - nos conecta con la base de datos y envia la consulta    
* @return  avisos - resultado de la consulta de la tabla avisos
*/    
	public function getAll(){
		$sql = "SELECT * FROM departamentos";
                $departamentos = $this->db->query($sql);
		return $departamentos;
	}

 /**
* metodo de acceso que enlista todo los avisos la base de datos 
* de la tabla avisos
* @string  $sql - nos retorna la consulta de todo los avisos de los empleados
* @string  $avisos - nos conecta con la base de datos y envia la consulta    
* @return  avisos - resultado de la consulta de la tabla avisos
*/         
	public function getOne(){
		$sql = "SELECT * FROM departamentos WHERE id={$this->getId()}";
                $departamento = $this->db->query($sql);
		return $departamento->fetch_object();
	}
} 
?>