<?php
 /**
* class contrato
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package modelo
* @private variables privadas que solo se pueden utilizar desde la misma clase que las define. 
* @int      $id              - variable $id del campo id de la tabla contratos  
* @string   $nombre_contrato - variable $nombre_contrato del campo nombre_contrato de la tabla contratos  
*/
class contrato{
         private $id;
         private $nombre_contrato;
      

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
* de la tabla contratos  
* @return  $this - $id nos devuelve un argumento o valor del atributo $id de la tabla contratos
*/    
    function getId() {
		return $this->id;
    }

/**
* metodo de acceso que obtiene el $nombre_contrato de la base de datos 
* de la tabla contratos  
* @return  $this - $nombre_contrato nos devuelve un argumento del atributo $nombre_contrato de la tabla contratos
*/    
    function getNombre_contrato() {
		return $this->nombre_contrato;
    }    
   
/**
* metodo modificador que asignara un nuevo valor al atributo  $id
* de la tabla contratos
* @param $id - contiene informacion $id
* @int   $id - nombre del atributo = al valor al asignar $id 
* @return no - nos retorna nada
*/     
    function setId($id) {
		$this->id = $id;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $nombre_contrato
* de la tabla contratos
* @param $id - contiene informacion $id
* @int   $nombre_contrato - nombre del atributo = al valor al asignar $nombre_contrato 
* @return no - nos retorna nada
*/     
    function setNombre_contrato($nombre_contrato) {
		$this->nombre_contrato = $nombre_contrato;
    }
    
 /**
* metodo de acceso que enlista todo los contratos de la base de datos 
* de la tabla contratos
* @string  $sql - nos retorna la consulta de todo los contratos que hay en la base de datos
* @string  $contratos - nos conecta con la base de datos y envia la consulta    
* @return  contratos - resultado de la consulta de la tabla contratos
*/    
    public function getAll(){
		$sql = "SELECT * FROM contratos";
		$contratos = $this->db->query($sql);
                return $contratos;
    }

 /**
* metodo de acceso que enlista el contrato asignado a cada empleado filtrado por el $id
* de la tabla contratos
* @string  $sql - nos retorna la consulta del contrato asignado a cada empleado filtrado por su id
* @string  $contrato - nos conecta con la base de datos y envia la consulta    
* @return  contrato - resultado de la consulta de la tabla contratos
*/     
    public function getOne(){
		$sql = "SELECT * FROM contratos WHERE id={$this->getId()}";
                $contrato = $this->db->query($sql);
		return $contrato->fetch_object();
    }

   } 
?>