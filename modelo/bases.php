<?php
 /**
* class base
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package modelo
* @private variables privadas que solo se pueden utilizar desde la misma clase que las define. 
* @int     $id           - variable $id del campo id de la tabla bases_cotizacion 
* @string  $nombre_base  - variable $nombre_base del campo nombre_base de la tabla bases_cotizacion 
* @float   $base_minima  - variable $base_minima del campo base_minima de la tabla bases_cotizacion 
* @float   $base_maxima  - variable $base_maxima del campo base_maxima de la tabla bases_cotizacion 
* @float   $contingencia - variable $contingencia del campo contingencia de la tabla bases_cotizacion 
*/
class base{
         private $id;
         private $nombre_base;
         private $base_minima;
         private $base_maxima;
         private $contingencia;
      
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
* de la tabla bases 
* @return  $this - $id nos devuelve un argumento o valor del atributo $id de la tabla bases
*/   
    function getId() {
		return $this->id;
    }
    
/**
* metodo de acceso que obtiene el $nombre_base de la base de datos 
* de la tabla bases 
* @return  $this - $nombre_base nos devuelve un string $nombre_bases de la tabla bases
*/     
    function getNombre_base() {
		return $this->nombre_base;
    }
    
/**
* metodo de acceso que obtiene el $base_minima de la base de datos 
* de la tabla bases 
* @return  $this - $base_minima nos devuelve un  valor del atributo $base_minima de la tabla bases
*/     
    function getBase_minima(){
        return $this->base_minima;
    }

/**
* metodo de acceso que obtiene el $base_maxima de la base de datos 
* de la tabla bases 
* @return  $this - $base_maxima nos devuelve un  valor del atributo $base_maxima de la tabla bases
*/    
    function getBase_maxima(){
        return $this->base_maxima;
    }
    
/**
* metodo de acceso que obtiene el $contingencia  de la base de datos 
* de la tabla bases 
*contingencia nos da el resultado de la cotizacion de cada empleado asignado por su categoria profesional 
* @return  $this - $contingencia nos devuelve un  valor del atributo $contingencia de la tabla bases
*/    
    function getContingencia(){
        return $this->contingencia;
    }
   
/**
* metodo modificador que asignara un nuevo valor al atributo  $id
* de la tabla bases
* @param $id - contiene informacion $id
* @int   $id - nombre del atributo = al valor al asignar $id 
* @return no - nos retorna nada
*/    
    function setId($id) {
		$this->id = $id;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $nombre_base
* de la tabla bases
* @param $nombre_base - contiene informacion del nombre del $nombre_base
* @int   $nombre_base - nombre del atributo = al valor al asignar $nombre_base 
* @return no - nos retorna nada
*/    
    function setNombre_base($nombre_base) {
		$this->nombre_base = $nombre_base;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $base_minima
* de la tabla bases
* @param $base_minima - contiene informacion del $base_minima
* @int   $base_minima - nombre del atributo = al valor al asignar $base_minima 
* @return no - nos retorna nada
*/     
    function setBase_minima($base_minima) {
        $this->base_minima = $base_minima;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $base_maxima
* de la tabla bases
* @param $base_maxima - contiene informacion del $base_maxima
* @int   $base_maxima - nombre del atributo = al valor al asignar $base_maxima 
* @return no - nos retorna nada
*/     
    function setBase_maxima($base_maxima) {
        $this->base_maxima = $base_maxima;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $contingencia
* de la tabla bases
* @param $contingencia - contiene informacion de la $contingencia
* @int   $contingencia - nombre del atributo = al valor al asignar $contingencia 
* @return no - nos retorna nada
*/     
    function setContingencia($contingencia) {
        $this->contingencia = $contingencia;
    }
    
 /**
* metodo de acceso que enlista todo las bases de cotizacion la base de datos 
* de la tabla bases_cotizacion
* @string  $sql - nos retorna la consulta de todo las bases_cotizacion de los empleados
* @string  $bases - nos conecta con la base de datos y envia la consulta    
* @return  bases - resultado de la consulta de la tabla bases_cotizacion
*/     
	public function getAll(){
		$sql = "SELECT * FROM bases_cotizacion";
                 $bases = $this->db->query($sql);
		  //echo $sql;
                  return $bases;
	}

 /**
* metodo de acceso que enlista todo las bases de cotizacion de cada empleado asignado filtrado por su $id
* @string  $sql - nos retorna la consulta de todo las bases_cotizacion de los empleados
* @string  $abase - nos conecta con la base de datos y envia la consulta    
* @return  base - resultado de la consulta de la tabla bases_cotizacion
*/
        public function getOne(){
		$sql = "SELECT * FROM bases_cotizacion WHERE id={$this->getId()}";
                 $base= $this->db->query($sql);
		  return $base->fetch_object();
	}


    } 
?>