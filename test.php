<?php
require_once 'model/Database.php';

require_once 'model/Participante.php';
echo("Pruebas");
$participante = new Participante();

$participante->setClave("1234");
$participante->setCodigo("1152656");
$participante->setEmail("siaweb@ufps.edu.co");
$participante->setNombre("Lina Maria");
$participante->setId(0);

//$participante->insert($participante);

//$participante->delete(3);

$susy = $participante->get(2);

var_dump($susy);

echo("<br/>Nombre: ".$susy->nombre);

foreach($participante->list() as $data) {
	echo("<br/>Nombre: ".$data->nombre);
}



?>