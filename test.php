<?php
require_once 'model/Database.php';

require_once 'model/Participante.php';
echo("Pruebas");
$participante = new Participante();

$participante->setClave("1234");
$participante->setCodigo("1152656");
$participante->setEmail("siaweb@ufps.edu.co");
$participante->setNombre("Carlos");
$participante->setId(0);

$participante->insert($participante);


?>