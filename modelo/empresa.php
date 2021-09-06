<?php
 /**
* class empresa
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package modelo
* @private variables privadas que solo se pueden utilizar desde la misma clase que las define. 
* @int     $id             - variable $id del campo id de la tabla empresas 
* @string  $nombre_empresa - variable $nombre_empresa del campo nombre_empresa de la tabla empresas  
* @string  $direccion      - variable $direccion del campo direccion de la tabla empresas  
* @string  $ciudad         - variable $ciudad del campo ciudad de la tabla empresas  
* @int     $codigo_postal  - variable $codigo_postal del campo codigo_postal de la tabla empresas
* @int     $telefono       - variable $telefono del campo telefono de la tabla empresas   
*/
class empresa{
         private $id;
         private $nombre_empresa;
         private $direccion;
         private $ciudad;
         private $codigo_postal;
         private $telefono;
        
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
* de la tabla empresas  
* @return  $this - $id nos devuelve un valor del atributo $id de la tabla empresas
*/
    function getId() {
		return $this->id;
    }

/**
* metodo de acceso que obtiene el $nombre_empresa de la base de datos 
* de la tabla empresas  
* @return  $this - $nombre_empresa nos devuelve un argumento del atributo $nombre_empresa de la tabla empresas
*/    
    function getNombre_Empresa() {
		return $this->nombre_empresa;
    }

/**
* metodo de acceso que obtiene el $direccion de la base de datos 
* de la tabla empresas  
* @return  $this - $direccion nos devuelve un argumento del atributo $direccion de la tabla empresas
*/    
    function getDireccion() {
		return $this->direccion;
    }

/**
* metodo de acceso que obtiene el $ciudad de la base de datos 
* de la tabla empresas  
* @return  $this - $ciudad nos devuelve un argumento del atributo $ciudad de la tabla empresas
*/        
    function getCiudad() {
		return $this->ciudad;
    }

/**
* metodo de acceso que obtiene el $codigo_postal de la base de datos 
* de la tabla empresas  
* @return  $this - $codigo_postal nos devuelve un valor del atributo $codigo_postal de la tabla codigo_postal
*/        
    function getCodigo_Postal() {
		return $this->codigo_postal;
    }

/**
* metodo de acceso que obtiene el $telefono de la base de datos 
* de la tabla avisos  
* @return  $this - $telefono nos devuelve un argumento o valor del atributo $telefono de la tabla empresas
*/    
    function getTelefono() {
		return $this->telefono;
    }   
    
/**
* metodo modificador que asignara un nuevo valor al atributo  $id
* de la tabla empresas
* @param $id - contiene informacion $id
* @int   $id - id del atributo = al valor al asignar $id 
* @return no - nos retorna nada
*/    
    function setId($id) {
		$this->id = $id;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $nombre_empresa
* de la tabla empresas
* @param $nombre_empresa - contiene informacion $nombre_empresa
* @int   $nombre_empresa - nombre_empresa del atributo = al valor al asignar $nombre_empresa 
* @return no - nos retorna nada
*/     
    function setNombre_Empresa($nombre_empresa) {
		$this->nombre_empresa = $nombre_empresa;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $direccion
* de la tabla empresas
* @param $direccion - contiene informacion $direccion
* @int   $direccion - direccion del atributo = al valor al asignar $direccion 
* @return no - nos retorna nada
*/     
    function setDireccion($direccion) {
		$this->direccion = $direccion;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $ciudad
* de la tabla empresas
* @param $ciudad - contiene informacion $ciudad
* @int   $ciudad - ciudad del atributo = al valor al asignar $ciudad 
* @return no - nos retorna nada
*/     
    function setCiudad($ciudad) {
		$this->ciudad = $this->db->real_escape_string($ciudad);
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $coidog_postal
* de la tabla empresas
* @param $codigo_postal - contiene informacion $codigo_postal
* @int   $codigo_postal - codigo_postal del atributo = al valor al asignar $codigo_postal 
* @return no - nos retorna nada
*/     
    function setCodigo_Postal($codigo_postal) {
		$this->codigo_postal = $this->db->real_escape_string($codigo_postal);
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $telefono
* de la tabla empresas
* @param $telefono - contiene informacion $telefono
* @int   $telefono - id del atributo = al valor al asignar $telefono 
* @return no - nos retorna nada
*/     
    function setTelefono($telefono) {
		$this->telefono = $this->db->real_escape_string($telefono);
    }    

 /**
* metodo de acceso que enlista todas las empresas en la base de datos 
* de la tabla empresas
* @string  $sql - nos retorna la consulta de todo las empresas de los empleados
* @string  $empresas - nos conecta con la base de datos y envia la consulta    
* @return  empresas - resultado de la consulta de la tabla empresas
*/      
    public function getAll(){
		$sql = "SELECT * FROM empresas";
		 $empresas= $this->db->query($sql);
                  return $empresas;
    }

 /**
* metodo de acceso que enlista todas las empresas en la base de datos 
* de la tabla empresas
* @string  $sql - nos retorna la consulta de todo las empresas de los empleados filtrado por el id
* @string  $empresa - nos conecta con la base de datos y envia la consulta    
* @return  empresa - resultado de la consulta de la tabla empresas
*/     
    public function getOne(){
		$sql = "SELECT * FROM empresas WHERE id={$this->getId()}";
                 $empresa = $this->db->query($sql);
		  return $empresa->fetch_object();
    }

 /**
* metodo de acceso que enlista todas las empresas en la base de datos 
* de la tabla empresas
* @string  $sql - nos retorna la consulta de todo las empresas de los empleados filtrado por el $id
* @string  $empresa - nos conecta con la base de datos y envia la consulta    
* @return  empresa - resultado de la consulta de la tabla empresas
*/     
    public function getEmpresa(){      
	        $sql ="SELECT * FROM empleados e 
                       INNER JOIN empresas m on e.empresa_id=m.id 
                       WHERE e.id={$this->getId()}";	      
                $empresa = $this->db->query($sql);             
	        //echo $sql;		
                return $empresa;
    }  
     
} 
?>