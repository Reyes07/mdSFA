<?php
	include_once('../datos/Cconexion.php');
	 class cUsuario
	 {

	 	private $Id_usuario;
	 	private $Id_tipoU;
	 	private $nickname;
	 	private $contrasenia;
	 	private $status;
	 	private $con;// variable de conexion 
	    //public $limite=1;

	 	
	 	public function __construct($args)
	 	{
	 		$cantidad=sizeof($args);
	 		switch ($cantidad) {
	 			case 1:
	 				$this->Id_usuario=$args[0];
	 				break;
	 			
	 			case 5://para guardar 
	 			    $this->Id_usuario=$args[0];
	 				$this->Id_tipoU=$args[1];
	 				$this->nickname=$args[2];
	 				$this->contrasenia=$args[3];
	 				$this->status=$args[4];
	 				break;

	 			case 3:

	 				$this->Id_tipoU=$args[0];	
	 				$this->nickname=$args[1];
	 				$this->contrasenia=$args[2];
	 				break;
					
				case 2:
				     $this->Id_tipoU=$args[0];
	 				$this->nickname=$args[1];
					break;
	 		}//cierra la clase 


	 	}//cierra el constructor

	 	public function setId_usuario($int)
	 	{

	 		$this->Id_usuario=$int;
	 	}

	 	public function getId_usuario()
	 	{

	 		return $this->Id_usuario;
	 	}

	 	public function setId_tipoU($str)
	 	{
	 		$this->Id_tipoU=str_replace("'", "\'", $str);
	 	}

	 	public function getId_tipoU()
	 	{
	 		return $this->Id_tipoU;
	 	}

	 	public function setnickname($str)
	 	{
	 		$this->nickname=str_replace("'", "\'", $str);
	 	}

	 	public function getnickname()
	 	{
	 		return $this->nickname;
	 	}
		
		public function setContrasenia($str)
	 	{
	 		$this->contrasenia=str_replace("'", "\'", $str);
	 	}

	 	public function getContrasenia()
	 	{
	 		return $this->contrasenia;
	 	}
		

	 	public function setstatus($str)
	 	{
	 		$this->status=str_replace("'", "\'", $str);
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
	 		//echo "string";$sql="call insertar_usuario('".$this->Id_tipoU."','".$this->nickname."','".$this->constrasenia."');";
	 		//$sql="call insertar_carrera('".$this->carrera."','".$this->Id_planEst."');";
	 		//echo $sql;
			//die();
	 		$this->con->consulta($sql);
			$this->con->desconectar();
			return true;
	 	}//cierra el metodo
		
		
		 public function eliminar()
        {
  	     $this->con=new cConexion();
  	     $this->con->conectar();
  	     $sql="eliminar_usuario(".$this->Id_usuario.");";
		 //echo $sql;
		 //die($sql);
  	     $this->con->consulta($sql);
         $this->con->desconectar();
  	     return true;
       }
  

	 	public function listartodos($query,$desde,$paginas){
	//si queremos paginar
		if($desde!=0 or $paginas!=0){
			$query.=" LIMIT ".$desde.",".$paginas."";
		}
	//*****
		$this->con= new cConexion();
		$this->con->conectar();
		$tabla=$this->con->consulta($query);
		$lista=array(); //creamos un arreglo
		if($this->con->num_rows($tabla)>0){
			while($fila=$this->con->fetch_array($tabla)){
				$tmp=new cUsuario(array($fila["Id_usuario"],$fila["Id_tipoU"],$fila["nickname"],$fila["contrasenia"],$fila["status"]));
				array_push($lista,$tmp);		
			}
		}
		$this->con->desconectar();
		return $lista;
	}
     
	 public function listardos($query,$desde,$paginas){
	//si queremos paginar
		if($desde!=0 or $paginas!=0){
			$query.=" LIMIT ".$desde.",".$paginas."";
		}
	//*****
		$this->con= new cConexion();
		$this->con->conectar();
		$tabla=$this->con->consulta($query);
		$lista=array(); //creamos un arreglo
		if($this->con->num_rows($tabla)>0){
			while($fila=$this->con->fetch_array($tabla)){
				$tmp=new cUsuario(array($fila["Id_tipoU"],$fila["nickname"]));
				array_push($lista,$tmp);		
			}
		}
		$this->con->desconectar();
		return $lista;
	}

	 }//llave que cierra la clase
?>