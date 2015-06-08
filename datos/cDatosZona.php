<?php

include_once("cConexion.php");

class cDatosZona
{
//Definicion de atributos
private $status;
private $Id_zona;
private $pb;
private $radsolar;
private $idgeozona;
private $fecha;
private $hr;
private $con;//Variable para la conexion a la BD

//Metodo Constructor

public function __construct ($args)
{
	$cantidad=sizeof($args);
	switch($cantidad){
		
		case 5:

		$this->Id_zona=$args[0];
		$this->pb=$args[1];
		$this->radsolar=$args[2];
		$this->hr=$args[3];

		$this->fecha=$args[4];

		break;

		case 1:
		$this->idgeozona=$args[0];
		break;

		case 6:

		$this->idgeozona=$args[0];
		$this->Id_zona=$args[1];
		$this->pb=$args[2];
		$this->radsolar=$args[3];
		$this->hr=$args[4];
		$this->fecha=$args[5];
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

public function setfecha($valor)
{
	$this->fecha = $valor;
}

public function getfecha()
{
	return $this->fecha;
}

//setters

public function setstatus($valor)
{
	$this->status = $valor;
}
public function setlongitud($valor)
{
	$this->longitud = $valor;
}

public function setid_zona($valor)
{
	$this->Id_zona = $valor;
}

public function setlatitud($valor)
{
	$this->latitud = $valor;
}

public function setaltitud($valor)
{
	$this->altitud = $valor;
}

public function sethr($valor)
{
	$this->hr = $valor;
}

public function setpb($valor)
{
	$this->pb = $valor;
}

public function setradsolar($valor)
{
	$this->radsolar = $valor;
}



public function guardar(){
	$this->con= new cConexion();
	$this->con->conectar();
	$sql="call insertar_datoszona(";
	$sql.="'".$this->Id_zona."',";
	$sql.="'".$this->pb."',";
	$sql.="'".$this->radsolar."',";
	$sql.="'".$this->hr."',";
	$sql.="'".$this->fecha."');";
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
	$sql.="'".$this->pb."',";
	$sql.="'".$this->radsolar."',";
	$sql.="'".$this->hr."',";
	$sql.="'".$this->fecha."');";
	echo $sql;
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;

}
public function restaurar()
{

$this->con= new cConexion();
	$this->con->conectar();
	$sql="call restaurar_datoszona('".$this->idgeozona."');";
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}
public function eliminar()
{

$this->con= new cConexion();
	$this->con->conectar();
	$sql="call borrar_datoszona('".$this->idgeozona."');";
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
				$tmp=new cDatosZona(array($fila["IdGeoZona"],$fila["Id_Zona"],$fila["humedadRelativa"],$fila["precipitaciónPluvial"],$fila["radSolar"],$fila["fecha"], $fila["status"]));
				array_push($lista,$tmp);		
			}
		}
		$this->con->desconectar();
		return $lista;
	}

}