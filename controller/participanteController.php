<?php 
require_once 'model/Database.php';
require_once 'model/entity/Participante.php';
require_once 'model/ParticipanteDao.php';

class ParticipanteController {

	function index() {
		$participanteDao = new ParticipanteDao();
		$participantes = $participanteDao->list();

		require_once 'view/header.php';
		require_once 'view/participante.php';
		require_once 'view/footer.php';
	}

	function consultar($id) {
		$participanteDao = new ParticipanteDao();
		$participante = $participanteDao->get($id);
		require_once 'view/header.php';
		require_once 'view/participanteVer.php';
		require_once 'view/footer.php';
		
	}

}

 ?>