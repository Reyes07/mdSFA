<?php
	include_once('Cconexion.php');
	 class cDatosUsuario
	 {

	 	private $nombre;
	 	private $apPat;
	 	private $apMat;
	 	private $email;
	 	private $con;// variable de conexion 

	 	
	 	public function __construct($args)
	 	{
	 		$cantidad=sizeof($args);
	 		switch ($cantidad) {
	 			
	 			
	 			case 4://para guardar 
	 				$this->nombre=$args[0];
	 				$this->apPat=$args[1];
	 				$this->apMat=$args[2];
	 				$this->email=$args[3];
	 				break;

	 			
	 		}//cierra la clase 


	 	}//cierra el constructor

	 	public function setnombre($valor)
	 	{

	 		$this->nombre=$valor;
	 	}

	 	public function getnombre()
	 	{

	 		return $this->nombre;
	 	}

	 	public function setapPat($valor)
	 	{
	 		$this->apPat=$valor;
	 	}

	 	public function getapPat()
	 	{
	 		return $this->apPat;
	 	}

	 	public function setapMat($valor)
	 	{
	 		$this->apMat=$valor;
	 	}

	 	public function getapMat()
	 	{
	 		return $this->apMat;
	 	}

	 	public function setemail($valor)
	 	{
	 		$this->email=$valor;
	 	}

	 	public function getemail()
	 	{
	 		return $this->email;
	 	}

	 	public function guardar()
	 	{
	 		$this->con=new Cconexion();
	 		$this->con->conectar();
	 		$sql="call insertar_DatosUsuario('".$this->nombre."','".$this->apPat."','".$this->apMat."','".$this->email."');";
	 		//echo "string";$sql="call insertar_usuario('".$this->Id_tipoU."','".$this->nickname."','".$this->constrasenia."');";
	 		//$sql="call insertar_carrera('".$this->carrera."','".$this->Id_planEst."');";
	 		
	 		$this->con->consulta($sql);
			$this->con->desconectar();
			return true;
	 	}//cierra el metodo

	 }
?>