<?php

include_once("cConexion.php");

class cDatosZona
{
//Definicion de atributos
private $status;
private $longitud;
private $Id_zona;
private $latitud;
private $altitud;
private $pb;
private $radsolar;
private $hr;
private $con;//Variable para la conexion a la BD

//Metodo Constructor

public function __construct ($args)
{
	$cantidad=sizeof($args);
	switch($cantidad){
		
		case 8:

		$this->Id_zona=$args[0];
		$this->longitud=$args[1];
		$this->latitud=$args[2];
		$this->altitud=$args[3];
		$this->pb=$args[4];
		$this->radsolar=$args[5];
		$this->hr=$args[6];
		$this->status=$args[7];
		break;

		case 1:
		$this->Id_zona=$args[0];
		break;

		case 7:

		$this->longitud=$args[0];
		$this->latitud=$args[1];
		$this->altitud=$args[2];
		$this->pb=$args[3];
		$this->radsolar=$args[4];
		$this->hr=$args[5];
		$this->status=$args[6];
		break;
	}
}

//getters


public function getstatus()
{
	return $this->status;
}
public function getlongitud()
{
	return $this->longitud;
}
public function getid_zona()
{
	return $this->Id_zona;
}

public function getlatitud()
{
	return $this->latitud;
}
public function getaltitud()
{
	return $this->altitud;
}

public function gethr()
{
	return $this->hr;
}

public function getpb()
{
	return $this->pb;
}


public function getradsolar()
{
	return $this->radsolar;
}

//setters

public function setstatus($int)
{
	$this->status = $int;
}
public function setlongitud($int)
{
	$this->longitud = $int;
}

public function setid_zona($int)
{
	$this->Id_zona = $int;
}

public function setlatitud($int)
{
	$this->latitud = $int;
}

public function setaltitud($int)
{
	$this->altitud = $int;
}

public function sethr($int)
{
	$this->hr = $int;
}

public function setpb($int)
{
	$this->pb = $int;
}

public function setradsolar($int)
{
	$this->radsolar = $int;
}



public function guardar(){
	$this->con= new cConexion();
	$this->con->conectar();
	$sql="call insertar_DatosZona(";	
	$sql.="'".$this->longitud."',";
	$sql.="'".$this->latitud."',";
	$sql.="'".$this->altitud."',";
	$sql.="'".$this->pb."',";
	$sql.="'".$this->radsolar."',";
	$sql.="'".$this->hr."',";
	echo $sql;
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}

//Operaciones CRUD
public function modificar()
{

	$this->con= new cConexion();
	$this->con->conectar();
	$sql="call update_datoszona(";	
	$sql.="'".$this->Id_zona."',";
	$sql.="'".$this->longitud."',";
	$sql.="'".$this->latitud."',";
	$sql.="'".$this->altitud."',";
	$sql.="'".$this->longitud."',";
	$sql.="'".$this->pb."',";
	$sql.="'".$this->radsolar."',";
	$sql.="'".$this->hr."',";
	$sql.="'".$this->longitud."',";
	$sql.="'".$this->status."');";
	//echo $sql;
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;

}
public function restaurar()
{

$this->con= new cConexion();
	$this->con->conectar();
	$sql="call restaurar_datoszona('".$this->Id_zona."');";
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}
public function eliminar()
{

$this->con= new cConexion();
	$this->con->conectar();
	$sql="call borrar_datoszona('".$this->Id_zona."');";
	//echo $sql;	
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}


public function listarDatosZona($query){
	//si queremos paginar
	//*****
		$this->con= new cConexion();
		$this->con->conectar();
		$tabla=$this->con->consulta($query);
		$lista=array(); //creamos un arreglo
		if($this->con->num_rows($tabla)>0){
			while($fila=$this->con->fetch_array($tabla)){
				$tmp=new cDatosZona(array($fila["Id_zona"],,$fila["longitud"],$fila["Latitud"],$fila["Altitud"],$fila["PB"],$fila["Rad_solar"],$fila["HR"], $fila["status"]));
				array_push($lista,$tmp);		
			}
		}
		$this->con->desconectar();
		return $lista;
	}

}