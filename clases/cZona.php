<?php
   include_once("../datos/Cconexion.php");

   class cZona
   {

   	private $Id_zona;
   	private $nombre;
   	private $status;
    private $con;
   	
   	public function __construct($args) 
   	{

   		$cantidad=sizeof($args);
   		switch ($cantidad) {
   			case 1:
   				$this->nombre=$args[0];
   				break;
   			
   			case 2:
   				$this->nombre=$args[0];
   				$this->status=$args[1];
   				break;
   		}//cierra el switch
   	}//cierra el constructor 
    
    public function setId_zona($int)
    {
    	$this->Id_zona=$int;
    }

    public function getId_zona()
    {
    	return $this->Id_zona;
    }

    public function setNombre($str)
    {
    	$this->nombre=str_replace("'", "\'", $str);
    }
    public function getNombre()
    {
    	return $this->nombre;
    }

    public function setStatus($int)
    {
    	$this->status=$int;
    }

    public function getStatus()
    {
    	return $this->status;
    }

    public function guardar()
    {
    	$this->con= new Cconexion();
    	$this->con->conectar();
    	$sql="call insertar_zona('".$this->nombre."');";
    	//echo $sql;
    	//die($sql);
    	$this->con->consulta($sql);
	    $this->con->desconectar();
	    return true;
    }
   }//cierra la clase
?>