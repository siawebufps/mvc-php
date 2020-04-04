<?php
define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/mvc-php/');

$controller = "index";
$accion = "index";

if(isset($_GET['url'])){

	$url = $_GET['url'];
	$url = explode('/', $url);
	$url = array_filter($url);

	$controller = array_shift($url);
	$accion = array_shift($url);
	$argumentos = $url;
/*
	if(isset($_GET["c"])){
		$controller = $_GET["c"];
	}
*/
	$rutaControlador = "controller/".$controller."Controller.php";

	if(is_readable($rutaControlador)){
		if(!$accion) {
			// Estamos cargando el archivo del control, por ejemplo si c = tipo, cargamos tipoController.php en la carpeta controller
			include_once($rutaControlador);
			// Convertivos el nombre colocando en mayuscula la primera letra, es decir TipoController
			$controller = ucwords($controller)."Controller";
			// Instanciamos la clase del controlador seleccionado TipoController
			$controller = new $controller;
			// Llamamos el metodo index() del controlador seleccionado
			$controller->index();
		}else{
			//$accion = $_GET["m"];
			echo($accion);
			include_once($rutaControlador);
			$controller = ucwords($controller)."Controller";
			$controller = new $controller;
			if(!$argumentos) {
				call_user_func(array($controller, $accion));
			}else{
				call_user_func_array(array($controller, $accion), $argumentos);
			}

		}
	}else{
		echo "Controller not found";
	}
}

?>