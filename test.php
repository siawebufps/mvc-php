<?php
require_once 'model/Database.php';

require_once 'model/Participante.php';
require_once 'model/ParticipanteDao.php';
require_once 'model/Tipo.php';
require_once 'model/TipoDao.php';

echo("Pruebas");
/*
$participanteDao = new ParticipanteDao();

$participante = new Participante();

$participante->setClave("1234");
$participante->setCodigo("1152656");
$participante->setEmail("siaweb@ufps.edu.co");
$participante->setNombre("Rosa Marcela");
$participante->setId(0);

$participanteDao->insert($participante);

//$participante->delete(3);

$susy = $participanteDao->get(2);

var_dump($susy);

echo("<br/>Nombre: ".$susy->nombre);

foreach($participanteDao->list() as $data) {
	echo("<br/>Nombre: ".$data->nombre);
}

*/

$tipoDao = new TipoDao();

$tipo = new Tipo();



foreach($tipoDao->list() as $data) {
	echo("<br/>Nombre: ".$data->descripcion);
}


?>