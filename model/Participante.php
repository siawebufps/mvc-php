<?php
class Participante {


	private $id;

	private $documento;

	private $nombre;

	private $fechaNacimiento;

	private $email;

	private $codigo;

	private $clave;

	private $foto;

	private $tipo;

	private $telefono;

	private $facebook;

	private $twitter;

	private $pdo;


	function __construct() {
		try {
			$this->pdo = Database::start();
		}catch(Exception $e) {
			die($e->getMessage());
		}
		
	}



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     *
     * @return self
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param mixed $fechaNacimiento
     *
     * @return self
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     *
     * @return self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @param mixed $clave
     *
     * @return self
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     *
     * @return self
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     *
     * @return self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     *
     * @return self
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     *
     * @return self
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
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


}


?>