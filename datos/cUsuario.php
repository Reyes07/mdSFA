<?php
	include_once('Cconexion.php');
	 class cUsuario
	 {

	 	private $Id_usuario;
	 	private $Id_tipoU;
	 	private $nickname;
	 	private $constrasenia;
	 	private $status;
	 	private $con;// variable de conexion 

	 	
	 	public function __construct($args)
	 	{
	 		$cantidad=sizeof($args);
	 		switch ($cantidad) {
	 			case 1:
	 				$this->Id_tipoU=$args[0];
	 				break;
	 			
	 			case 4://para guardar 
	 				$this->Id_tipoU=$args[0];
	 				$this->nickname=$args[1];
	 				$this->constrasenia=$args[2];
	 				$this->status=$args[3];
	 				break;

	 			case 3:
	 				$this->Id_tipoU=$args[0];	
	 				$this->nickname=$args[1];
	 				$this->constrasenia=$args[2];
	 				break;
	 		}//cierra la clase 


	 	}//cierra el constructor

	 	public function setId_usuario($valor)
	 	{

	 		$this->Id_usuario=$valor;
	 	}

	 	public function getId_usuario()
	 	{

	 		return $this->Id_usuario;
	 	}

	 	public function setId_tipoU($valor)
	 	{
	 		$this->Id_tipoU=$valor;
	 	}

	 	public function getId_tipoU()
	 	{
	 		return $this->Id_tipoU;
	 	}

	 	public function setnickname($valor)
	 	{
	 		$this->nickname=$valor;
	 	}

	 	public function getnickname()
	 	{
	 		return $this->nickname;
	 	}

	 	public function setstatus($valor)
	 	{
	 		$this->status=$valor;
	 	}

	 	public function getstatus()
	 	{
	 		return $this->status;
	 	}

	 	public function guardar()
	 	{
	 		$this->con=new Cconexion();
	 		$this->con->conectar();
	 		$sql="call insertar_usuario('".$this->Id_tipoU."','".$this->nickname."','".$this->constrasenia."');";
	 		echo "string";$sql="call insertar_usuario('".$this->Id_tipoU."','".$this->nickname."','".$this->constrasenia."');";
	 		//$sql="call insertar_carrera('".$this->carrera."','".$this->Id_planEst."');";
	 		
	 		$this->con->consulta($sql);
			$this->con->desconectar();
			return true;
	 	}//cierra el metodo

	 }
?>