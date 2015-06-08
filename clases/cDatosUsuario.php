<?php
	include_once('../datos/Cconexion.php');
	 class cDatosUsuario
	 {
        private $Id_datosU;
	 	private $nombre;
	 	private $apPat;
	 	private $apMat;
	 	private $email;
	 	private $Id_usuario;
	 	private $status;
	 	private $con;// variable de conexion 

	 	
	 	public function __construct($args)
	 	{
	 		$cantidad=sizeof($args);
	 		switch ($cantidad) {
	 			
	 			case 1:
	 			  $this->Id_datosU=$args[0];
	 			  break;
	 			case 5://para guardar 
	 				$this->nombre=$args[0];
	 				$this->apPat=$args[1];
	 				$this->apMat=$args[2];
	 				$this->email=$args[3];
	 				$this->Id_usuario=$args[4];
	 				break;
				
                 case 6:
				    $this->Id_datosU=$args[0];
				    $this->nombre=$args[1];
	 				$this->apPat=$args[2];
	 				$this->apMat=$args[3];
	 				$this->email=$args[4];
	 				$this->Id_usuario=$args[5];
                 break;				 

	 			
	 		}//cierra la clase 


	 	}//cierra el constructor

	 	public function setId_datosU($int)
	 	{
           $this->Id_datosU=$int;
	 	}

	 	public function getId_datosU()
	 	{
	 		return $this->Id_datosU;
	 	}

	 	public function setnombre($str)
	 	{

	 		$this->nombre=str_replace("'", "\'", $str);
	 	}

	 	public function getnombre()
	 	{

	 		return $this->nombre;
	 	}

	 	public function setapPat($str)
	 	{
	 		$this->apPat=str_replace("'", "\'", $str);
	 	}

	 	public function getapPat()
	 	{
	 		return $this->apPat;
	 	}

	 	public function setapMat($str)
	 	{
	 		$this->apMat=str_replace("'", "\'", $str);
	 	}

	 	public function getapMat()
	 	{
	 		return $this->apMat;
	 	}

	 	public function setemail($str)
	 	{
	 		$this->email=$str_replace("'", "\'", $str);
	 	}


	 	public function getemail()
	 	{
	 		return $this->email;
	 	}

	 	public function setId_usuario($int)
	 	{
	 		$this->Id_usuario=$int;
	 	}

	 	public function getId_usuario()
	 	{
	 		return $this->Id_usuario;
	 	}

	 	public function setStatus($str)
	 	{
	 		$this->status=str_replace("'", "\'", $str);
	 	}

	 	public function getStatus()
	 	{
	 		return $this->status;
	 	}

	 	public function guardar()
	 	{
	 		$this->con=new Cconexion();
	 		$this->con->conectar();
	 		$sql="call insertar_DatosUsuario('".$this->nombre."','".$this->apPat."','".$this->apMat."','".$this->email."','".$this->Id_usuario."');";
	 		//echo "string";$sql="call insertar_usuario('".$this->Id_tipoU."','".$this->nickname."','".$this->constrasenia."');";
	 		//$sql="call insertar_carrera('".$this->carrera."','".$this->Id_planEst."');";
	 		//echo $sql;
			//die();
	 		$this->con->consulta($sql);
			$this->con->desconectar();
			return true;
	 	}//cierra el metodo

	 }
?>