<?php

class TipoDao {

	private $pdo;

	function __construct() {
		try {
			$this->pdo = Database::start();
		}catch(Exception $e) {
			die($e->getMessage());
		}
		
	}

	public function insert(Tipo $data) {

    	try {

	    	$sql = "INSERT INTO tipo (id, descripcion) VALUES (?, ?)";

	    	$this->pdo->prepare($sql)->execute(
	    		array(
	    			$data->getId(),
	    			$data->getDescripcion()
	    		)
	    	);

    	}catch(Exception $e) {
			die($e->getMessage());
		}

    }


    public function update(Tipo $data) {

    	try {

	    	$sql = "UPDATE tipo SET descripcion = ? WHERE id = ? ";

	    	$this->pdo->prepare($sql)->execute(
	    		array(
	    			$data->getDescripcion(),
	    			$data->getId()
	    		)
	    	);

    	}catch(Exception $e) {
			die($e->getMessage());
		}

    }


    public function delete($id) {

    	try {

	    	$sql = "DELETE FROM tipo WHERE id = ? ";

	    	$this->pdo->prepare($sql)->execute(
	    		array($id)
	    	);

    	}catch(Exception $e) {
			die($e->getMessage());
		}

    }

    public function list() {
    	try{
    		$result = array();

	    	$stm = $this->pdo->prepare("SELECT * FROM tipo");
	    	$stm->execute();

	    	return $stm->fetchAll(PDO::FETCH_OBJ);
    	}catch(Exception $e) {
			die($e->getMessage());
		}
    	
    }

    public function get($id) {
    	try{
    		$result = array();

	    	$stm = $this->pdo->prepare("SELECT * FROM tipo WHERE id = ?");
	    	$stm->execute(array($id));

	    	return $stm->fetch(PDO::FETCH_OBJ);
    	}catch(Exception $e) {
			die($e->getMessage());
		}
    }

}

?>
