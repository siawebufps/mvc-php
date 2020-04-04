<?php  

class ParticipanteDao {

	private $pdo;

	function __construct() {
		try {
			$this->pdo = Database::start();
		}catch(Exception $e) {
			die($e->getMessage());
		}
		
	}

	public function insert(Participante $data) {

    	try {

	    	$sql = "INSERT INTO participante (id, documento, nombre, fechanacimiento, email, codigo, clave, foto, tipo, telefono, facebook, twitter) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	    	$this->pdo->prepare($sql)->execute(
	    		array(
	    			$data->getId(),
	    			$data->getDocumento(), 
	    			$data->getNombre(), 
	    			$data->getFechanacimiento(), 
	    			$data->getEmail(), 
	    			$data->getCodigo(), 
	    			$data->getClave(), 
	    			$data->getFoto(), 
	    			$data->getTipo(), 
	    			$data->getTelefono(), 
	    			$data->getFacebook(), 
	    			$data->getTwitter()
	    		)
	    	);

    	}catch(Exception $e) {
			die($e->getMessage());
		}

    }


    public function update(Participante $data) {

    	try {

	    	$sql = "UPDATE participante SET documento = ?, nombre = ?, fechanacimiento = ?, email = ?, codigo = ?, clave = ?, foto = ?, tipo = ?, telefono = ?, facebook = ?, twitter = ? WHERE id = ? ";

	    	$this->pdo->prepare($sql)->execute(
	    		array(
	    			$data->getDocumento(), 
	    			$data->getNombre(), 
	    			$data->getFechanacimiento(), 
	    			$data->getEmail(), 
	    			$data->getCodigo(), 
	    			$data->getClave(), 
	    			$data->getFoto(), 
	    			$data->getTipo(), 
	    			$data->getTelefono(), 
	    			$data->getFacebook(), 
	    			$data->getTwitter(),
	    			$data->getId()
	    		)
	    	);

    	}catch(Exception $e) {
			die($e->getMessage());
		}

    }


    public function delete($id) {

    	try {

	    	$sql = "DELETE FROM participante WHERE id = ? ";

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

	    	$stm = $this->pdo->prepare("SELECT * FROM participante");
	    	$stm->execute();

	    	//var_dump($stm->fetchAll(PDO::FETCH_OBJ));
	    	while($fila = $stm->fetch(PDO::FETCH_OBJ)) {
	    		$p = new Participante();
	    		$p->setNombre($fila->nombre);
	    		$p->setEmail($fila->email);
	    		$p->setCodigo($fila->codigo);
	    		$p->setClave($fila->clave);
	    		$result[] = $p;

	    	}

	    	//$res = $stm->fetchAll(PDO::FETCH_OBJ);




	    	return $result;
    	}catch(Exception $e) {
			die($e->getMessage());
		}
    	
    }

    public function get($id) {
    	try{
    		$result = array();

	    	$stm = $this->pdo->prepare("SELECT * FROM participante WHERE id = ?");
	    	$stm->execute(array($id));

	    	return $stm->fetch(PDO::FETCH_OBJ);
    	}catch(Exception $e) {
			die($e->getMessage());
		}
    }

}

?>