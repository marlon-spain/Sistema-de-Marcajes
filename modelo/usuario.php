<?php
 /**
* class usuario
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package modelo
* @private variables privadas que solo se pueden utilizar desde la misma clase que las define. 
* @int    $id              - variable $id del campo id de la tabla usuarios
* @int    $departamento_id - variable $departamento_id del campo departamento_id de la tabla usuarios 
* @int    $empresa_id      - variable $empresa_id del campo empresa_id de la tabla usuarios 
* @int    $contrato_id     - variable $contrato_id del campo contrato_id de la tabla usuarios  
* @string $nombre          - variable $nombre del campo nombre de la tabla usuarios  
* @string $apellidos       - variable $apellidos del campo apellidos de la tabla usuarios  
* @int    $telefono        - variable $telefono del campo telefono de la tabla usuarios
* @string $password        - variable $password del campo password de la tabla usuarios  
* @date   $fecha_alta      - variable $fecha_alta del campo fecha_alta de la tabla usuarios  
* @date   $fecha_baja      - variable $fecha_baja del campo fecha_baja de la tabla usuarios    
*/
class usuario{
         private $id;
         private $departamento_id;
         private $empresa_id;
         private $contrato_id;
         private $nombre;
         private $apellidos;
         private $telefono;
         private $password;
         private $fecha_alta;
         private $fecha_baja;
         private $bases_id;
         private $online;
         private $bloqueo;
         private $db;
         
         
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
* de la tabla empleados
* @return  $this - $id nos devuelve un valor del atributo $id de la tabla empleados
*/
    function getId() {
		return $this->id;
    }   

 /**
* metodo de acceso que obtiene el $departamento_id de la base de datos 
* de la tabla empleados
* @return  $this - $departamento_id nos devuelve un valor del atributo $departamento_id de la tabla empleados
*/   
    function getDepartamento_id() {
		return $this->departamento_id;
    }

/**
* metodo de acceso que obtiene el $empresa_id de la base de datos 
* de la tabla empleados
* @return  $this - $empresa_id nos devuelve un valor del atributo $empresa_id de la tabla empleados
*/    
    function getEmpresa_Id() {
		return $this->empresa_id;
    }

        /**
* metodo de acceso que obtiene el $contrato_id de la base de datos 
* de la tabla empleados
* @return  $this - $contrato_id nos devuelve un valor del atributo $contrato_id de la tabla empleados
*/
    function getContrato_Id() {
		return $this->contrato_id;
    }

/**
* metodo de acceso que obtiene el $nombre de la base de datos 
* de la tabla empleados
* @return  $this - $nombre nos devuelve un valor del atributo $nombre de la tabla empleados
*/
    function getNombre() {
		return $this->nombre;
    }

/**
* metodo de acceso que obtiene el $apellidos de la base de datos 
* de la tabla empleados
* @return  $this - $apellidos nos devuelve un valor del atributo $apellidos de la tabla empleados
*/
	function getApellidos() {
		return $this->apellidos;
    }

/**
* metodo de acceso que obtiene el $telefono de la base de datos 
* de la tabla empleados
* @return  $this - $telefono nos devuelve un valor del atributo $telefono de la tabla empleados
*/    
    function getTelefono() {
		return $this->telefono;
	}

/**
* metodo de acceso que obtiene el $password de la base de datos 
* de la tabla empleados
* @return  $this - $password nos devuelve un valor del atributo $password de la tabla empleados
*/        
    function getPassword() {
		return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

/**
* metodo de acceso que obtiene el $fecha_alta de la base de datos 
* de la tabla empleados
* @return  $this - $fecha_alta nos devuelve un valor del atributo $fecha_alta de la tabla empleados
*/    
    function getFecha_alta() {
        return $this->fecha_alta;
    }
 
/**
* metodo de acceso que obtiene el $fecha_baja de la base de datos 
* de la tabla empleados
* @return  $this - $fecha_baja nos devuelve un valor del atributo $fecha_baja de la tabla empleados
*/
    function getFecha_Baja() {
        return $this->fecha_baja;
    }
    
/**
* metodo de acceso que obtiene el $bases_id de la base de datos 
* de la tabla empleados
* @return  $this - $bases_id nos devuelve un valor del atributo $bases_id de la tabla empleados
*/
    function getBases_id() {
        return $this->bases_id;
    }

/**
* metodo de acceso que obtiene el $online de la base de datos 
* de la tabla empleados
* @return  $this - $online nos devuelve un valor del atributo $online de la tabla empleados
*/    
    function getOnline() {
        return $this->online;
    }

/**
* metodo de acceso que obtiene el $bloqueo de la base de datos 
* de la tabla empleados
* @return  $this - $bloqueo nos devuelve un valor del atributo $bloqueo de la tabla empleados
*/    
    function getBloqueo() {
        return $this->bloqueo;
    }
   
 /**
* metodo modificador que asignara un nuevo valor al atributo  $id
* de la tabla empleados
* @param $id - contiene informacion $id
* @int   $id - nombre del atributo = al valor al asignar $id 
* @return no - nos retorna nada
*/   
    function setId($id) {
		$this->id = $id;
    }    

 /**
* metodo modificador que asignara un nuevo valor al atributo  $id
* de la tabla empleados
* @param $id - contiene informacion $id
* @int   $id - nombre del atributo = al valor al asignar $id 
* @return no - nos retorna nada
*/  
    function setDepartamento_id($departamento_id) {
		$this->departamento_id = $departamento_id;
    }

 /**
* metodo modificador que asignara un nuevo valor al atributo  $empresa_id
* de la tabla empleados
* @param $empresa_id - contiene informacion $id
* @int   $empresa_id - nombre del atributo = al valor al asignar $empresa_id 
* @return no - nos retorna nada
*/      
    function setEmpresa_id($empresa_id) {
		$this->empresa_id = $empresa_id;
    }

 /**
* metodo modificador que asignara un nuevo valor al atributo  $contrato_id
* de la tabla empleados
* @param $contrato_id - contiene informacion $contrato_id
* @int   $contrato_id - nombre del atributo = al valor al asignar $contrato_id 
* @return no - nos retorna nada
*/          
    function setContrato_id($contrato_id) {
		$this->contrato_id = $contrato_id;
    }

 /**
* metodo modificador que asignara un nuevo valor al atributo  $nombre
* de la tabla empleados
* @param $nombre - contiene informacion $nombre
* @string   $nombre - nombre del atributo = al valor al asignar $nombre 
* @return no - nos retorna nada
*/  
    function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
    }

 /**
* metodo modificador que asignara un nuevo valor al atributo  $apellidos
* de la tabla empleados
* @param $apellidos - contiene informacion $id
* @string   $apellidos - nombre del atributo = al valor al asignar $apellidos 
* @return no - nos retorna nada
*/  
    function setApellidos($apellidos) {
		$this->apellidos = $this->db->real_escape_string($apellidos);
    }

 /**
* metodo modificador que asignara un nuevo valor al atributo  $telefono
* de la tabla empleados
* @param $telefono - contiene informacion $id
* @int   $telefono - nombre del atributo = al valor al asignar $telefono 
* @return no - nos retorna nada
*/  
    function setTelefono($telefono) {
		$this->telefono = $this->db->real_escape_string($telefono);
    }

 /**
* metodo modificador que asignara un nuevo valor al atributo  $password
* de la tabla empleados
* @param $password - contiene informacion $password
* @string  $password - nombre del atributo = al valor al asignar $password
* @return no - nos retorna nada
*/      
    function setPassword($password){
        $this->password = $this->db->real_escape_string($password);
    }

 /**
* metodo modificador que asignara un nuevo valor al atributo  $fecha_alta
* de la tabla empleados
* @param $fecha_alta - contiene informacion $fecha_alta
* @date   $fecha_alta - nombre del atributo = al valor al asignar $fecha_alta 
* @return no - nos retorna nada
*/  
    function setFecha_alta($fecha_alta){
        $this->fecha_alta=$fecha_alta;
    }

 /**
* metodo modificador que asignara un nuevo valor al atributo  $fecha_baja
* de la tabla empleados
* @param $fecha_baja - contiene informacion $fecha_baja
* @date   $fecha_baja - nombre del atributo = al valor al asignar $fecha_baja 
* @return no - nos retorna nada
*/    
    function setFecha_baja($fecha_baja){
        $this->fecha_baja=$fecha_baja;
    }
 
 /**
* metodo modificador que asignara un nuevo valor al atributo  $bases_id
* de la tabla empleados
* @param $bases_id - contiene informacion $bases_id
* @int   $bases_id - nombre del atributo = al valor al asignar $bases_id 
* @return no - nos retorna nada
*/
    function setBases_id($bases_id){
        $this->bases_id=$bases_id;
    }

 /**
* metodo modificador que asignara un nuevo valor al atributo  $online
* de la tabla empleados
* @param $online - contiene informacion $online
* @enum   $online - nombre del atributo = al valor al asignar $online 
* @return no - nos retorna nada
*/    
    function setonline($online){
        $this->online=$online;
    }

 /**
* metodo modificador que asignara un nuevo valor al atributo  $bloqueo
* de la tabla empleados
* @param $bloqueo - contiene informacion $bloqueo
* @enum   $bloqueo - nombre del atributo = al valor al asignar $bloqueo 
* @return no - nos retorna nada
*/
    function setBloqueo($bloqueo){
        $this->bloqueo=$bloqueo;
    }    
   
 /**
* metodo de acceso que en lista todo los rempleados de la base de datos 
* de la tabla registros filtrado por el id
* @string  $sql - nos retorna la consulta del empleado filtrado por el id
* @string  $usuario - nos conecta con la base de datos y envia la consulta    
* @return  usuario - resultado de la consulta de la tabla usuarios nos devuelve un objeto que es filtrado por el id
*/   
    public function getOne(){
        $sql="SELECT * FROM empleados WHERE id={$this->getId()}";
        $usuario = $this->db->query($sql);
        // echo $sql;
        return $usuario->fetch_object();
    } 
    
 /**
* metodo de acceso que enlista todo los empleados de la base de datos 
* de la tabla empleados
* @string  $sql - nos retorna la consulta de todos los empleados juntando la tablas empresa, departamentos y contratos
* @function DATE_FORMAT esta funcion nos permite definir el formato de salida de una fecha 
* @string  $usuarios - nos conecta con la base de datos y envia la consulta    
* @return  usuarios - resultado de la consulta de la tabla usuarios
*/      
    public function getAll(){
        //para que el mes salga en español s consultas
       
                $consulta= "SET lc_time_names = 'es_ES'";
		$sql = "SELECT e.id, e.nombre, e.apellidos, e.bloqueo, DATE_FORMAT(fecha_alta,'%d %M                         %Y')as'fecha_alta', d.nombre_departamento,
                d.horario, m.nombre_empresa, c.nombre_contrato 
                FROM empleados e 
                INNER JOIN departamentos d  ON e.departamento_id=d.id 
                INNER JOIN empresas m  ON e.empresa_id=m.id
                INNER JOIN contratos c ON e.contrato_id=c.id 
                WHERE e.id not in (1) AND e.fecha_baja is null 
                ORDER BY e.id ASC ";
                //muestra resultado exeptoo el admin
                $usuarios = $this->db->query($consulta);
                $usuarios = $this->db->query($sql); 
              
		echo $sql;
                 return $usuarios;               
    }
    
/**
* metodo de acceso que enlista todo los empleados de la base de datos que son dado de baja
* de la tabla empleados
* @string  $sql - nos retorna la consulta de todos los empleados juntando la tablas empresa, departamentos y contratos
* menos el id =1 o admin administrador 
* @function DATE_FORMAT esta funcion nos permite definir el formato de salida de una fecha 
* @string  $usuarios - nos conecta con la base de datos y envia la consulta    
* @return  usuarios - resultado de la consulta de la tabla usuarios
*/    
    //lista empleados que han sido dado de baja
    public function getAll_bajas(){
                //para que el mes salga en español s consultas
                $consulta= "SET lc_time_names = 'es_ES'";
	   	$sql = "SELECT e.id, e.nombre,e.apellidos,DATE_FORMAT(fecha_alta,'%d %M   
                %Y')as'fecha_alta', DATE_FORMAT(fecha_baja,'%d %M %Y')as'fecha_baja', d.nombre_departamento, d.horario, m.nombre_empresa, c.nombre_contrato 
                FROM empleados e 
                INNER JOIN departamentos d ON e.departamento_id=d.id 
                INNER JOIN empresas m ON e.empresa_id=m.id 
                INNER JOIN contratos c ON e.contrato_id=c.id
                WHERE e.id not in (1) AND e.fecha_baja 
                ORDER BY e.id ASC";
                   //muestra resultado exeptoo el admin
                $usuarios = $this->db->query($consulta);
                $usuarios = $this->db->query($sql);              
		       //echo $sql;
                return $usuarios;               
    } 
    
/**
* metodo de acceso que enlista todo los empleados de la base de datos 
* de la tabla empleados filtrado por el id
* @string  $sql - nos retorna la consulta de todos los empleados juntando la tablas empresa, departamentos y contratos 
* filtrado por el id 
* @function DATE_FORMAT esta funcion nos permite definir el formato de salida de una fecha 
* @string  $usuario - nos conecta con la base de datos y envia la consulta    
* @return  usuario - resultado de la consulta de la tabla usuarios
*/    
    public function getAllByUser(){
                 $consulta="SET lc_time_names = 'es_ES'";        
	         $sql ="SELECT e.id, e.nombre, e.apellidos, DATE_FORMAT(fecha_alta,'%d       
                 %M%Y')as'fecha_alta', d.nombre_departamento, d.horario, m.nombre_empresa, c.nombre_contrato FROM empleados e 
                 INNER JOIN departamentos d  ON e.departamento_id=d.id
                 INNER JOIN contratos c ON e.contrato_id=c.id
                 INNER JOIN empresas m  ON e.empresa_id=m.id 
                 WHERE e.id={$this->getId()}";
                $usuario = $this->db->query($consulta);
                $usuario = $this->db->query($sql);            
	            echo $sql;		
		        return $usuario;
    }          
      
/**
* metodo de acceso que enlista todo los registros juntando los empleados de la base de datos 
* de la tabla empleados filtrado por el id y el mes actual
* @string  $sql - nos retorna la consulta de todos los registros juntando la tablas empresa, empleados, departamentos y contratos 
* filtrado por el id  y el mes actual
* @function DATE_FORMAT esta funcion nos permite definir el formato de salida de una fecha
* @function Timediff esta funcion devuelve el rencuento como un valor entero valores stardate, enddate
* devuelve la hora minutos y segundos 
* @string  $usuario - nos conecta con la base de datos y envia la consulta    
* @return  usuario - resultado de la consulta de la tabla usuarios
*/    
    public function getMensual(){
              $consulta="SET lc_time_names = 'es_ES'";              
              $sql="SELECT e.id, e.nombre, f.nombre_falta, f.multa, b.nombre_base, DATE_FORMAT(fecha,'%d %M %Y')as'fecha',
               r.entrada, r.salida, hour(TIMEDIFF(salida, entrada)) 
              as'horas' , ':' , minute(TIMEDIFF(salida, entrada))as'minutos', ':', 
              second(TIMEDIFF(salida ,entrada))as 'segundos',
              TIMESTAMPDIFF( minute, entrada, salida )*b.contingencia-f.multa as 'saldo',DATE_FORMAT(fecha,'%M')as'Mes'
              FROM registros r 
              INNER JOIN empleados e ON r.empleado_id=e.id
              INNER JOIN bases_cotizacion b ON e.bases_id=b.id
              INNER JOIN faltas f on f.id=r.falta_id
              WHERE MONTH(fecha) = MONTH(CURDATE()) AND e.id={$this->getId()}
              ORDER BY fecha ASC ";
              
              
        
              $usuario = $this->db->query($consulta);
              $usuario = $this->db->query($sql);                   
              //echo $sql;
              return $usuario;            
    }
    

    

/**
* metodo de acceso que enlista todo los registros juntando los empleados de la base de datos 
* de la tabla empleados filtrado por el id y el mes actual
* @string  $sql - nos retorna la consulta de todos los registros juntando la tablas empresa, empleados, departamentos y contratos 
* filtrado por el id  y el mes actual
* @function DATE_FORMAT esta funcion nos permite definir el formato de salida de una fecha
* @function Timediff esta funcion devuelve el rencuento como un valor entero valores stardate, enddate
* devuelve la hora minutos y segundos, esta funcion aparte nos hace la operacion de darnos el saldo, la sancion si es que hay y 
* por resultado nos da el total del dia 
* @string  $usuario - nos conecta con la base de datos y envia la consulta    
* @return  usuario - resultado de la consulta de la tabla usuarios
*/     
    public function getTotal(){
            $consulta="SET lc_time_names = 'es_ES'";  
            $sql="SELECT e.id, e.nombre, e.apellidos, e.fecha_alta, f.nombre_falta, count(falta_id)as'sanciones', f.multa, b.nombre_base, 
                DATE_FORMAT(fecha,'%M')as'Mes', r.entrada, r.salida,
            hour(TIMEDIFF(salida, entrada)) as'horas' , ':' , minute(TIMEDIFF(salida, entrada))as'minutos', ':', 
            second(TIMEDIFF(salida ,entrada))as 'segundos', sum(TIMESTAMPDIFF( minute, entrada,
            salida )*b.contingencia - f.multa) as 'Total'
            fROM registros r INNER JOIN empleados e ON r.empleado_id=e.id
            
            INNER JOIN bases_cotizacion b ON e.bases_id=b.id
            INNER JOIN faltas f on f.id=r.falta_id
            WHERE MONTH(fecha) = MONTH(CURDATE()) 
            AND e.id={$this->getId()}";  
            $usuario = $this->db->query($consulta);   
            $usuario = $this->db->query($sql);                   
            echo $sql;
            return $usuario; 	 
    } 

    
 /**
* metodo que almacena los datos de la tabla en la base de datos 
* de la tabla empleados metodo que inserta o crea a los empleados
* @string   $sql - nos inserta los datos de la consulta de los empleados 
* @function Curdate() esta funcion devuelve el fecha actual del sistema  
* @string   $save - nos conecta con la base de datos y nos inserta los datos a la base de datos
* @boolean  $result - si es falso nos da un error y si es verdadero nos envia el insertado de datos      
* @return   result - resultado del insertado de filas en una tabla
*/    
    public function save(){
                $sql = "INSERT INTO empleados 
                VALUES(NULL, {$this->getDepartamento_id()}, {$this->getEmpresa_id()},
                            {$this->getContrato_id()}, '{$this->getNombre()}',
                            '{$this->getApellidos()}', {$this->getTelefono()},
                            '{$this->getPassword()}', CURDATE(), NULL,{$this->getBases_id()},'0','1');";
                          $save = $this->db->query($sql);		
                            $result = false;
                             // echo $sql;
                               if($save){
                                 $result = true;
                                }
                                return $result;
    }     


 /**
* metodo que actualiza los datos de la tabla en la base de datos 
* de la tabla empleados nos permite editar todo sus datos por el administrador 
* @string   $sql - nos actualiza los datos de la consulta de los empleados  
* @function Curdate() esta funcion devuelve el fecha actual del sistema  
* @string   $save - nos conecta con la base de datos y nos actualiza los datos a la base de datos
* mediante el $id 
* @boolean  $result - si es falso nos da un error y si es verdadero nos envia un actualizado de datos      
* @return   result - resultado del actualizado de filas en una tabla
*/    
    public function edit(){
	            $sql = "UPDATE empleados SET nombre='{$this->getNombre()}',
                    apellidos='{$this->getApellidos()}', 
                    telefono={$this->getTelefono()}, 
                    departamento_id={$this->getDepartamento_id()},
                    empresa_id={$this->getEmpresa_id()},
                    contrato_id={$this->getContrato_id()},
                    bases_id={$this->getBases_id()}    
                    WHERE id='{$this->getid()}';";
                 	$save = $this->db->query($sql);			
			$result = false;
                        //echo $sql;                                
		 	 if($save){
		          $result = true;
			     }           
			     return $result;                  
    }
                
 /**
* metodo que actualiza los datos de la tabla en la base de datos de la tabla empleados nos
* permite dar nuevamente de alta a un empleado que a sido de baja anteriormente y desbloquearlo
* @string   $sql - nos actualiza los datos de la consulta de los empleados desbloqueando el acceso de sesion   
* @string   $save - nos conecta con la base de datos y nos da de alta al empleado ademas de desbloquear el acceso
* @boolean  $result - si es falso nos da un error y si es verdadero nos envia un actualizado de datos      
* @return   result - resultado del actualizado de filas en una tabla
*/    
    public function edit_alta(){
               	        $sql = "UPDATE empleados SET fecha_baja=null,
                        bloqueo='1' WHERE id='{$this->getid()}';";		
                        $save = $this->db->query($sql);			
			$result = false;
                        //echo $sql;           
			if($save){
                        $result = true;    			}          
	                return $result;                  
    }
    
 /**
* metodo que actualiza los datos de la tabla en la base de datos de la tabla empleados nos
* permite dar de baja a un empleado mas no eliminarlo y se bloquea su acceso 
* @string   $sql - nos actualiza los datos de la consulta de los empleados bloqueando el acceso de sesion    
* @string   $save - nos conecta con la base de datos y nos da de alta al empleado ademas de desbloquear el acceso
* @boolean  $result - si es falso nos da un error y si es verdadero nos envia un actualizado de datos      
* @return   result - resultado del actualizado de filas en una tabla
*/    
    public function edit_baja(){
           	        $sql = "UPDATE empleados SET fecha_baja=CURDATE(), 
                        bloqueo='0'WHERE id='{$this->getid()}';";			 
	                $save = $this->db->query($sql);			
			$result = false;
                        //echo $sql;                            
		 	if($save){
			  $result = true;
		   	  }          
		 	return $result;                  
    }

 /**
* metodo que actualiza los datos de la tabla en la base de datos de la tabla empleados nos
* permite elejir y cambiar el tipo de departamento actualizando los datos
* @string   $sql - nos actualiza el dato del departamento mediante el id del empleado     
* @string   $save - nos conecta con la base de datos y nos actualiza sus datos    
* @return   save - resultado del actualizado de filas en una tabla
*/    
    public function edit_dep(){
                    $sql = "UPDATE empleados SET departamento_id={$this->getDepartamento_id()}
                    WHERE id={$this->getid()}";
                    $save = $this->db->query($sql);		 
                    //echo $sql."<br>";	
		    return $save;
    }
                
 /**
* metodo que actualiza los datos de la tabla en la base de datos de la tabla empleados nos
* permite elejir y cambiar el tipo de empresa actualizando los datos
* @string   $sql - nos actualiza el dato de la empresa mediante el id del empleado     
* @string   $save - nos conecta con la base de datos y nos actualiza sus datos    
* @return   save - resultado del actualizado de filas en una tabla
*/     
    public function edit_emp(){
               	    $sql = "UPDATE empleados SET empresa_id={$this->getEmpresa_id()}
                    WHERE id={$this->getid()}";
                    $save = $this->db->query($sql);		 
                    //echo $sql."<br>";	
		    return $save;
    }
                
 /**
* metodo que actualiza los datos de la tabla en la base de datos de la tabla empleados nos
* permite elejir y cambiar el tipo de contrato actualizando los datos
* @string   $sql - nos actualiza el dato del contrato mediante el id del empleado     
* @string   $save - nos conecta con la base de datos y nos actualiza sus datos    
* @return   save - resultado del actualizado de filas en una tabla
*/     
    public function edit_con(){
                    $sql = "UPDATE empleados SET contrato_id={$this->getContrato_id()}
                    WHERE id={$this->getid()}";
                    $save = $this->db->query($sql);		 
                    //echo $sql."<br>";	
		    return $save;
    }
    
 /**
* metodo que actualiza los datos de la tabla en la base de datos de la tabla empleados nos
* permite activar el acceso de los empleados que es controlado por el administrador
* @string   $sql - nos actualiza un dato enviando 1 para que el usuario este activado  
* @string   $save - nos conecta con la base de datos y nos actualiza el dato 1 para activar al empleado   
* @boolean  $result - si es falso nos da un error y si es verdadero nos envia un actualizado de datos      
* @return   result - resultado del actualizado de filas en una tabla
*/       
    public function activar(){
                  $sql = "UPDATE empleados SET bloqueo='1' 
                          WHERE id='{$this->getid()}';";			 
	          $save = $this->db->query($sql);			
		  $result = false;
                  //echo $sql;                            
		  if($save){
		     $result = true;
		  }          
		  return $result;                  
    }
    
 /**
* metodo que actualiza los datos de la tabla en la base de datos de la tabla empleados nos
* permite desactivar y restrinjir el acceso de los empleados que es controlado por el administrador
* @string   $sql - nos actualiza un dato enviando 0 para que el empleado este desactivado  
* @string   $save - nos conecta con la base de datos y nos actualiza el dato 0 para desactivar al empleado   
* @boolean  $result - si es falso nos da un error y si es verdadero nos envia un actualizado de datos      
* @return   result - resultado del actualizado de filas en una tabla
*/       
    public function desactivar(){
     	            $sql = "UPDATE empleados SET bloqueo='0' 
                    WHERE id='{$this->getid()}';";			 
		    $save = $this->db->query($sql);			
		    $result = false;
                    //echo $sql;                            
		     if($save){
			$result = true;
			}          
		     return $result;                  
    }
		 
 /**
* metodo que nos permite acceder a la web mediante una consulta seleccionando al usuario si existe no y nos permite el acceso 
* de la misma diferenciando si es un usuario o administrador
* @int      $id  - variable que nos da el id del usuario       
* @string   $nombre - variable que obtenemos el nombre del usuario
* @string   $password - variable que obtenemos el password de la base de datos 
* @string   $sql - nos envia la una consulta para ver si el usuario existe o no y desbloquea el acceso
* pudiendo acceder a la aplicacion
* @string   $login - nos conecta con la base de datos y nos actualiza el dato 1 para activar al empleado
* @string   $consulta - nos actualiza el dato de online a 1 para que se vea reflejado en 
* el sistema que estamos conectados 
* @boolean  $result - si es falso nos da un error y si es verdadero nos envia un actualizado de datos      
* @return   result - resultado del actualizado de filas en una tabla
*/ 
    public function login(){        
                  $result = false;
		  $id = $this->id;
                  $nombre = $this->nombre;
		  $password = $this->password;
	          // Comprobar si existe el usuario
	          $sql = "SELECT * FROM empleados WHERE nombre = '$nombre' and bloqueo='1' ";          
                  $login = $this->db->query($sql);            
                   //echo"$sql";               
                   if($login && $login->num_rows == 1){
			  $usuario = $login->fetch_object();
			  // Verificar la contraseña
			  $verify = password_verify($password, $usuario->password); 
			  if($verify){
			   $result = $usuario;
                           $consulta = "update empleados set online='1' WHERE nombre='$nombre' and password='$usuario->password';";
                            $login = $this->db->query($consulta);               
                            //echo"<br>";
                            //echo"$consulta";
                            //die();
			   }	                        
                        }		
		            return $result;                      
    }  
    
 /**
* metodo que mediante una actualizacion nos permite cerrar la sesion y bloquear su acceso hasta su proximo logueo
* @string   $sql - nos actualiza un dato enviando 0 para que el empleado este desconectado y no se vea reflejado en el sistema
* @string   $save - nos conecta con la base de datos y nos actualiza el dato 0 para desactivar al empleado 
* @object   $_SESSION -  nos da un objeto de sesion con los datos del empleado admin si es administrador e identity si es usuario
* @function session_destroy() esta funcion destruye la sesion del usuario     
* @boolean  $result - si es falso nos da un error y si es verdadero nos envia un actualizado de datos      
* @return   result - resultado del actualizado de filas en una tabla
*/        
    public function cerrar(){   
                     $id = $this->id; //otra manera de recibir parametro smediante el objeto sesion
	             $sql = "UPDATE empleados SET online='0' where id =$id;"; 		
                     $cerrar = $this->db->query($sql);	                   
                     echo"<br>";
                     echo "$sql";                
                     echo"<br>";                     
                    //echo"$_FILES";
                    // die();		     
                    if(isset($_SESSION['identity'])){
                    session_destroy();
                    }	
                    return $cerrar;
    }  
    
 /**
* metodo de acceso que en lista todo los rempleados de la base de datos 
* que se encuentren conectados 
* @string  $sql - nos retorna la consulta de todo los empleados conectados con 1  online y que se vea en la vista del admin
* @string  $online - nos conecta con la base de datos y envia la consulta    
* @return  online - resultado de la consulta de la tabla usuarios nos devuelve un objeto que es filtrado por el id
*/    
    public function enlinea(){
                $sql= "SELECT *, curdate() FROM empleados where online='1'";
                $online=$this->db->query($sql);       
                return $online;
    }
    
 /**
* metodo que borra los registros de los empleados por norma general no se debe usar porque no se puede eliminar 
* los registros de un empleado con su totalidad 
* @string   $sql - nos elimina los dato de un empleado y sus registros     
* @string   $save - nos conecta con la base de datos y nos elimina sus datos    
* @return   save - resultado del delete de filas en una tabla
*/ 		 
    public function delete(){
	     	    $sql = "DELETE FROM empleados WHERE id={$this->getId()};";
		    $delete = $this->db->query($sql);
		    //en la base de dato se crea la restriccion con ondelte cascada para que borre los registro de una tabla y otra	
		    $result = false;
		    	   if($delete){
			    $result = true;				
		     	   }
                           //echo $sql;			
		           return $result;			
    }
		 
 /**
* metodo de acceso que busca la informacion de los empleados de la base de datos 
* @string  $sql - nos retorna la consulta mediante un like comparador de caracteres para encontrar su busqueda
* @string  $usuario - nos conecta con la base de datos y envia la consulta    
* @return  usuario - resultado de la consulta de la tabla usuarios nos devuelve un objeto que es filtrado por el id
*/       
    public function buscar(){          	
                  $sql="SELECT * FROM empleados 
                  WHERE nombre like '{$this->getNombre()}' 
                  and id={$this->getId()}";  
                  $usuario = $this->db->query($sql);                  
                  //echo $sql;              
		  return $usuario->fetch_object(); 	
    }
    
 /**
* metodo de acceso que actualiza la password de los empleados filtrado por su id y su nombre
* @string  $sql - nos actualiza el dato de la password olvidada y poder crear una nueva filtrado por el id
* @string  $usuario - nos conecta con la base de datos y envia la consulta    
* @return  usuario - resultado de la actualizacion de la tabla usuarios 
*/    
    public function newpass(){          	
            $sql="UPDATE empleados SET password='{$this->getPassword()}' where id={$this->getId()}
            and nombre='{$this->getNombre()}'";            
            $usuario = $this->db->query($sql); 
            //echo "$sql";
            return $usuario; 	
    }

} 
?>