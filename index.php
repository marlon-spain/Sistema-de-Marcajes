<?php
ob_start();
const EN_CONTROLADOR =true;
session_start();


if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 300) {//2 minutos
    session_destroy(); 

    header("Location:".base_url); 
}
$_SESSION['tiempo']=time(); 
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'vistas/layout/login.php';

$ActualizarDespuesDe = 120; 

header('Refresh: '.$ActualizarDespuesDe);
 /**
*metodo para que muestre error de controladores
  * 
*@public  la funcion show_error es publica

*@object $error - objeto errorcontroller(): controla los controladores y si e sincorrecto nos da error
*@array $nombre_controlador - pasamos el nombre del controlador por el metodo get 
*@object $controlador - objeto nombre_controlador()  
*@array $action - pasa la accion por get al metodo del controlador
*@array $action_default- pasa por defecto la accion por get al metodo del controlador 

*/

function show_error(){
	$error = new errorController();
	$error->index();
}

if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
	

}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
	
}else{
	show_error();
	exit();
}

if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
	}else{
		show_error();
	}
}else{
   show_error();
}
require_once 'vistas/layout/pie.php';

?>






         
       