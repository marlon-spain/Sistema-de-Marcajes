<?php
 /**
* class registro
*
* observaciones: 
* 
* @author Marlon Briones Castro [marlon_b91@hotmail.com]
* @author http://www.fct.com
* @category Proyecto desarrollo web
* @package modelo
* @private variables privadas que solo se pueden utilizar desde la misma clase que las define. 
* @int      $id            - variable $id del campo id de la tabla registros 
* @int      $empleado_id   - variable $empleado_id del campo empleado_id de la tabla registros 
* @date     $fecha         - variable $fecha del campo fecha de la tabla registros 
* @time     $entrada       - variable $entrada del campo entrada de la tabla registros  
* @time     $salida        - variable $salida del campo salida de la tabla registros  
* @int      $incidencia_id - variable $incidencia_id del campo incidencia_id de la tabla registros  
* @int      $tarea_id      - variable $tarea_id del campo tarea_id de la tabla registros 
*@int       $falta_id      - variable $falta_id del campo falta_id de la tabla registros   
*/
class registro{
         private $id;
	 private $empleado_id;
	 private $fecha;
	 private $entrada;
	 private $salida;
         private $incidencia_id;
         private $tarea_id;
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
* de la tabla registros 
* @return  $this - $id nos devuelve un valor del atributo $id de la tabla registros
*/
    function getId() {
 	return $this->id;
    }

/**
* metodo de acceso que obtiene el $empleado_id de la base de datos 
* de la tabla registros 
* @return  $this - $empleado_id nos devuelve un valor $empleado_id de la tabla registros
*/    
    function getEmpleado_id() {
		return $this->empleado_id;
    }

/**
* metodo de acceso que obtiene la $fecha de la base de datos 
* de la tabla registros 
* @return  $this - $fecha nos devuelve un valor date - $fecha de la tabla registros
*/    
    function getFecha() {
 	return $this->fecha;
    }

/**
* metodo de acceso que obtiene el $entrada de la base de datos 
* de la tabla registros 
* @return  $this - $entrada nos devuelve un valor $entrada de la tabla registros
*/    
    function getEntrada() {
 	return $this->entrada;
    }

/**
* metodo de acceso que obtiene el $salida de la base de datos 
* de la tabla registros 
* @return  $this - $salida nos devuelve un valor del atributo $salida de la tabla registros
*/    
    function getSalida() {
	return $this->salida;
    }

/**
* metodo de acceso que obtiene el $incidencia_id de la base de datos 
* de la tabla registros 
* @return  $this - $incidencia_id nos devuelve un valor del atributo $incidencia_id de la tabla registros
*/    
    function getIncidencia_id() {
    return $this->incidencia_id;
    }

/**
* metodo de acceso que obtiene el $tarea_id de la base de datos 
* de la tabla registros 
* @return  $this - $tarea_id nos devuelve un valor del atributo $tarea_id de la tabla registros
*/    
    function getTarea_id() {
    return $this->tarea_id;
    }

/**
* metodo de acceso que obtiene el $falta_id de la base de datos 
* de la tabla registros 
* @return  $this - $falta_id nos devuelve un valor del atributo $falta_id de la tabla registros
*/ 
    function getFalta_id() {
    return $this->falta_id;
    }    
    
/**
* metodo modificador que asignara un nuevo valor al atributo  $id
* de la tabla registros
* @param $id - contiene informacion $id
* @int   $id - nombre del atributo = al valor al asignar $id 
* @return no - nos retorna nada
*/     
    function setId($id) {
	$this->id = $id;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $empleado_id
* de la tabla registros
* @param $empleado_id - contiene informacion $empleado_id
* @int   $empleado_id - nombre del atributo = al valor al asignar $empleado_id 
* @return no - nos retorna nada
*/     
    function setEmpleado_id($empleado_id) {
	$this->empleado_id = $empleado_id;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $fecha
* de la tabla registros
* @param $fecha - contiene informacion $fecha
* @int   $fecha - nombre del atributo = al valor al asignar $fecha 
* @return no - nos retorna nada
*/     
    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $entrada
* de la tabla registros
* @param $entrada - contiene informacion $entrada
* @int   $entrada - nombre del atributo = al valor al asignar $entrada 
* @return no - nos retorna nada
*/     
    function setEntrada($entrada) {
       $this->entrada = $entrada;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $salida
* de la tabla registros
* @param $salida - contiene informacion $salida
* @int   $salida - nombre del atributo = al valor al asignar $salida 
* @return no - nos retorna nada
*/     
    function setSalida($salida) {
	$this->salida = $salida;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $incidencia_id
* de la tabla registros
* @param $incidencia_id - contiene informacion $incidencia_id
* @int   $incidencia_id - nombre del atributo = al valor al asignar $incidencia_id 
* @return no - nos retorna nada
*/     
    function setIncidencia_id($incidencia_id) {
	$this->incidencia_id = $incidencia_id;
    }

/**
* metodo modificador que asignara un nuevo valor al atributo  $tarea_id
* de la tabla registros
* @param $tarea_id - contiene informacion $tarea_id
* @int   $tarea_id - nombre del atributo = al valor al asignar $tarea_id 
* @return no - nos retorna nada
*/     
    function setTarea_id($tarea_id) {
	$this->tarea_id = $tarea_id;
    }
 
/**
* metodo modificador que asignara un nuevo valor al atributo  $falta_id
* de la tabla registros
* @param $falta_id - contiene informacion $tarea_id
* @int   $falta_id - nombre del atributo = al valor al asignar $falta_id 
* @return no - nos retorna nada
*/  
    function setFalta_id($falta_id) {
	$this->falta_id = $falta_id;
    }
    
    
    
 /**
* metodo de acceso que enlista todo los registros de la base de datos 
* de la tabla registros
* @string  $sql - nos retorna la consulta de todos los registros de todos los empleados juntando la tabla registros
* @function Timediff esta funcion devuelve el rencuento como un valor entero valores stardate, enddate
* devuelve la hora minutos y segundos 
* @string  $registros - nos conecta con la base de datos y envia la consulta    
* @return  registros - resultado de la consulta de la tabla registros
*/	
    public function getAll(){
		$sql = "SELECT *, hour(TIMEDIFF(salida, entrada)) as'horas' , ':' ,            
                minute(TIMEDIFF(salida, entrada))as'minutos', ':',
                second(TIMEDIFF(salida ,entrada))as 'segundos'
                FROM empleados e INNER JOIN registros r 
	        ON e.id=r.empleado_id 
                WHERE r.empleado_id=1";             
		$registros = $this->db->query($sql);
              
                 return $registros;                
    }
    
 /**
* metodo de acceso que en lista todo los registros de la base de datos 
* de la tabla registros filtrado por el empleado_id
* @string  $sql - nos retorna la consulta de todos los registros de todos los empleados juntando la tabla registros
* @string  $registro - nos conecta con la base de datos y envia la consulta    
* @return  registro - resultado de la consulta de la tabla registros nos devuelve un objeto que es filtrado por el empleado_id
*/
    public function getOne(){
		 $sql= "SELECT nombre, fecha, entrada, salida 
                        FROM empleados e INNER JOIN registros r  
                        ON e.id=r.empleado_id WHERE empleado_id={$this->getEmpleado_id()}";
	         $registro = $this->db->query($sql);
	          return $registro->fetch_object();	
    } 


 /**
* metodo que almacena los datos de la tabla en la base de datos 
* de la tabla registros metodo que inserta la ora del registro marcaje de entrada
* @string   $sql - nos inserta los datos de la consulta de los registros de todos los empleados juntando la tabla registros
* @function Curdate() esta funcion devuelve el fecha actual del sistema  
* @string   $save - nos conecta con la base de datos y nos inserta los datos a la base de datos
* @boolean  $result - si es falso nos da un error y si es verdadero nos envia el insertado de datos      
* @return   result - resultado del insertado de filas en una tabla
*/
    public function save(){    
             $hoy = date("H:i:s");  
	     $sql = "INSERT INTO registros 
                     VALUES(NULL,{$this->getEmpleado_Id()}, CURDATE(), CURTIME(),null,1,1,1);";	
             $save = $this->db->query($sql);
             //echo $sql."<br>";            
                
		$result = false;
              //if($login && $login->num_rows == 1){
                if($save){
		   $result = true;
                   echo"Bienvenido a tu jornada has fichado";
	        }else{
                  echo"No puedes tener dos fichajes por dia ERROR!!!";
                }
                 return $result;
		    
    }

 /**
* metodo que actualiza los datos de la tabla en la base de datos 
* de la tabla registros por medio de la fecha metodo que nos actualiza la hora de salido y por ende nos da el marcaje de salida
* @string   $sql - nos actualiza los datos de la consulta de los registros del empleado  
* @function Curdate() esta funcion devuelve el fecha actual del sistema  
* @string   $save - nos conecta con la base de datos y nos actualiza los datos a la base de datos
* mediante el $empleado_id y curdate() la fecha actual
* @boolean  $result - si es falso nos da un error y si es verdadero nos envia un actualizado de datos      
* @return   result - resultado del actualizado de filas en una tabla
*/    
    public function saves(){
		$sql = "UPDATE registros SET salida=curtime() 
                WHERE empleado_id={$this->getEmpleado_id()} and fecha=curdate()";
		$save = $this->db->query($sql);		 
                //echo $sql."<br>";
	 	$result = false;
	        if($save){
	          $result = true;
                  echo"exitoo";
                  }else{
                  echo"debes fichar";
                  }
		  return $result;
     }
    
 /**
* metodo que actualiza los datos de la tabla en la base de datos 
* de la tabla registros y actualizamos la incidencia que viene por defecto
* @string   $sql - nos actualiza los datos de la consulta de los registros del empleado  por medio de empleado_id y curdate()
* @function Curdate() esta funcion devuelve el fecha actual del sistema  
* @string   $save - nos conecta con la base de datos y nos actualiza los datos a la base de datos
* mediante el $empleado_id y curdate() la fecha actual     
* @return   save - resultado del actualizado de filas en una tabla
*/    
     public function save_incidencia(){
		$sql = "UPDATE registros SET incidencia_id={$this->getIncidencia_id()} 
                WHERE empleado_id={$this->getEmpleado_id()} AND fecha=curdate()";
                $save = $this->db->query($sql);		 
                //echo $sql."<br>";	
		return $save;
    }

 /**
* metodo que actualiza los datos de la tabla en la base de datos 
* de la tabla registros y actualizamos la tarea que viene por defecto
* @string   $sql - nos actualiza los datos de la consulta de los registros del empleado  por medio de empleado_id y curdate()
* @function Curdate() esta funcion devuelve el fecha actual del sistema  
* @string   $save - nos conecta con la base de datos y nos actualiza los datos a la base de datos
* mediante el $empleado_id y curdate() la fecha actual     
* @return   save - resultado del actualizado de filas en una tabla
*/    
    public function save_tarea(){
		$sql = "UPDATE registros SET tarea_id={$this->getTarea_id()}
                        WHERE empleado_id={$this->getEmpleado_id()} AND fecha=curdate()";
                $save = $this->db->query($sql);		 
                //   echo $sql."<br>";	
		return $save;
    }

 /**
* metodo que actualiza los datos de la tabla en la base de datos 
* de la tabla registros y actualizamos las falta que viene por defecto
* @string   $sql - nos actualiza los datos de la consulta de los registros del empleado  por medio de empleado_id y curdate()
* @function Curdate() esta funcion devuelve el fecha actual del sistema  
* @string   $save - nos conecta con la base de datos y nos actualiza los datos a la base de datos
* mediante el $empleado_id y curdate() la fecha actual     
* @return   save - resultado del actualizado de filas en una tabla
*/     
    public function save_falta(){
		$sql = "UPDATE registros SET falta_id={$this->getfalta_id()}
                        WHERE empleado_id={$this->getEmpleado_id()} AND fecha=curdate()";
                $save = $this->db->query($sql);		 
                  //echo $sql."<br>";                   
		return $save;
    }

 /**
* metodo de acceso que enlista todo los registros de la base de datos 
* de la tabla registros mediante varios inner join registros, incidencias, empleados, tareas
* @string  $sql - nos retorna la consulta de todos los registros de todos los empleados juntando la tabla registros
* de tareas, empleados, incidencias, registros 
* @function Timediff esta funcion devuelve el rencuento como un valor entero valores stardate, enddate
* devuelve la hora minutos y segundos 
* @function Curdate() esta funcion devuelve el fecha actual del sistema  
* @string  $registro - nos conecta con la base de datos y envia la consulta juntando las respectivas tablas   
* @return  registro - resultado de la consulta de la tabla registros
*/
    public function getAllByUser(){
	           $sql ="SELECT r.empleado_id, f.nombre_falta, e.nombre, e.apellidos, r.fecha,
                          r.entrada, i.nombre_incidencia, t.nombre_tarea, r.salida, hour(TIMEDIFF(salida, entrada)) 
                         as'horas' , ':' , minute(TIMEDIFF(salida, entrada))as'minutos', ':', 
                         second(TIMEDIFF(salida ,entrada))as 'segundos' 
                         FROM empleados e INNER JOIN registros r ON e.id=r.empleado_id
                         INNER JOIN incidencias i ON i.id=r.incidencia_id
                         INNER JOIN tareas t ON t.id=r.tarea_id
                         INNER JOIN faltas f on f.id=r.falta_id
                         WHERE r.empleado_id={$this->getEmpleado_id()} AND r.fecha=curdate() ";		
		        $registro = $this->db->query($sql); 
                //echo $sql."<br>";			
		        return $registro;
   }    

 /**
* metodo de acceso que enlista todo los registros de la base de datos 
* de la tabla registros mediante varios inner join 
* @string  $sql - nos retorna la consulta de todos los registros de todos los empleados juntando la tabla registros
* de empleados, bases_cotizacion, registros 
* @function Timediff esta funcion devuelve el rencuento como un valor entero valores stardate, enddate
* devuelve la hora minutos y segundos 
* @function Curdate() esta funcion devuelve el fecha actual del sistema  
* @string  $registro - nos conecta con la base de datos y envia la consulta juntando las respectivas tablas   
* @return  registro - resultado de la consulta de la tabla registros
*/   
    public function getHora(){            
		       $sql ="SELECT r.empleado_id,f.nombre_falta,f.multa, nombre,apellidos, fecha, entrada, 
                             salida, b.nombre_base, hour(TIMEDIFF(salida, entrada)) 
                             as'horas' , ':' , minute(TIMEDIFF(salida, entrada))as'minutos', ':', 
                             second(TIMEDIFF(salida ,entrada))as 'segundos',
                             TIMESTAMPDIFF( minute, entrada, salida )*b.contingencia as 'total',f.multa,
                             TIMESTAMPDIFF( minute, entrada, salida )*b.contingencia-f.multa as 'saldo'                             
                             FROM empleados e INNER JOIN registros r                
                             ON e.id=r.empleado_id 
                             INNER JOIN bases_cotizacion b ON e.bases_id=b.id
                             INNER JOIN faltas f on f.id=r.falta_id
                             WHERE r.fecha=curdate()";               
                              //echo $sql . "<br>";		               
                            $registro=$this->db->query($sql);
        
                        //una forma de comprobar las filas si existen
                        //la otra forma esta en admin/informe.php
                         /* if ($registro->num_rows === 0) {
                          echo "no existe";
                          }
                         else{
                             echo"existe";
                         }*/
                             
                               return $registro;
                     }
    
/**
* metodo de acceso que enlista todo los registros de la base de datos 
* de la tabla registros mediante varios inner join 
* @string  $sql - nos retorna la consulta de todos los registros de todos los empleados juntando la tabla registros
* de empleados, bases_cotizacion, registros 
* @function Timediff esta funcion devuelve el rencuento como un valor entero valores stardate, enddate
* devuelve la hora minutos y segundos 
* @function Curdate() esta funcion devuelve el fecha actual del sistema
* @function dateformat() esta funcion nos devuelve el nombre del mes de la consulta   

* @string  $registro - nos conecta con la base de datos y envia la consulta juntando las respectivas tablas  
* @return  registro - resultado de la consulta de la tabla registros
*/   
    public function buscar_mensual(){                           
		  $consulta="SET lc_time_names = 'es_ES'";
                   $sql="SELECT e.id, e.nombre, f.nombre_falta, f.multa, b.nombre_base, DATE_FORMAT(fecha,'%d %M       %Y')as'fecha',       r.entrada, r.salida, hour(TIMEDIFF(salida, entrada)) 
              as'horas' , ':' , minute(TIMEDIFF(salida, entrada))as'minutos', ':', 
              second(TIMEDIFF(salida ,entrada))as 'segundos',
              TIMESTAMPDIFF( minute, entrada, salida )*b.contingencia-f.multa as 'saldo'
              FROM registros r 
              INNER JOIN empleados e ON r.empleado_id=e.id
              INNER JOIN bases_cotizacion b ON e.bases_id=b.id
              INNER JOIN faltas f on f.id=r.falta_id
                        WHERE MONTHNAME(fecha) = '{$this->getFecha()}' 
                        AND YEAR(fecha) = 2020 and r.empleado_id={$this->getEmpleado_id()} 
                        ORDER BY fecha ASC";
                        $registro = $this->db->query($consulta);
                        $registro = $this->db->query($sql);                   
                       // echo $sql;              
		        return $registro; 	
     }
     
        public function buscar_mensual_total(){                           
		  $consulta="SET lc_time_names = 'es_ES'";
                   $sql="SELECT e.id, e.nombre, e.apellidos, e.fecha_alta, f.nombre_falta,
                     count(falta_id)as'sanciones', f.multa, b.nombre_base,
                     DATE_FORMAT(fecha,'%M')as'Mes', r.entrada, r.salida, 
                     hour(TIMEDIFF(salida, entrada)) as'horas' , ':' , minute(TIMEDIFF(salida, entrada))as'minutos', ':', 
                     second(TIMEDIFF(salida ,entrada))as 'segundos', sum(TIMESTAMPDIFF( minute, entrada, salida )*b.contingencia - f.multa) as 'Total'
                     fROM registros r INNER JOIN empleados e ON r.empleado_id=e.id 
                     INNER JOIN bases_cotizacion b ON e.bases_id=b.id 
                     INNER JOIN faltas f on f.id=r.falta_id 
                     WHERE MONTHNAME(fecha) ='{$this->getFecha()}'  AND r.empleado_id={$this->getEmpleado_id()} ";
                        $registro = $this->db->query($consulta);
                        $registro = $this->db->query($sql);                   
                        //echo $sql;              
		        return $registro; 	
     }
     
     

     
} 
?>  