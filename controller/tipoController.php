<?php 
require_once 'model/Database.php';
require_once 'model/entity/Tipo.php';
require_once 'model/TipoDao.php';
class TipoController {

	function index() {
		$tipoDao = new TipoDao();
		$tipos = $tipoDao->list();
		require_once 'view/header.php';
		require_once 'view/tipo.php';
		require_once 'view/footer.php';
	}

}
	
 ?>