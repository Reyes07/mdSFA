<?php

include_once("cConexion.php");

class cZona
{
//Definicion de atributos
private $status;
private $nombre;
private $latitud;
private $longitud;
private $Id_zona;
private $con;//Variable para la conexion a la BD

//Metodo Constructor

public function __construct ($args)
{
	$cantidad=sizeof($args);
	switch($cantidad){
		
		case 3:

		$this->nombre=$args[0];
		$this->latitud=$args[1];
		$this->longitud=$args[2];
		break;
		case 1:
		$this->Id_zona=$args[0];
		break;
		case 2:

		$this->nombre=$args[0];
		$this->status=$args[1];
		break;
		case 4:

		$this->Id_zona=$args[0];
		$this->nombre=$args[1];
		$this->latitud=$args[2];		
		$this->longitud=$args[3];
		break;
		case 5:

		$this->Id_zona=$args[0];
		$this->nombre=$args[1];
		$this->latitud=$args[2];		
		$this->longitud=$args[3];
		$this->status=$args[4];
		break;
	}
}

//getters


public function getstatus()
{
	return $this->status;
}
public function getnombre()
{
	return $this->nombre;
}
public function getid_zona()
{
	return $this->Id_zona;
}

//setters

public function setlatitud($valor)
{
	$this->latitud = $valor;
}
public function getlatitud()
{
	return $this->latitud;
}

//setters

public function setlongitud($valor)
{
	$this->longitud = $valor;
}
public function getlongitud()
{
	return $this->longitud;
}

//setters

public function setstatus($valor)
{
	$this->status = $valor;
}
public function setnombre($valor)
{
	$this->nombre = $valor;
}

public function setid_zona($valor)
{
	$this->Id_zona = $valor;
}

public function guardar(){
	$this->con= new cConexion();
	$this->con->conectar();
	$sql="call insertar_zona(";	
	$sql.="'".$this->nombre."',";
	$sql.="'".$this->latitud."',";
	$sql.="'".$this->longitud."');";
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
	$sql="call update_zona(";	
	$sql.="'".$this->Id_zona."',";
	$sql.="'".$this->nombre."',";
	$sql.="'".$this->latitud."',";
	$sql.="'".$this->longitud."');";
	//echo $sql;
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;

}
public function restaurar()
{

$this->con= new cConexion();
	$this->con->conectar();
	$sql="call restaurar_zona('".$this->Id_zona."');";
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}
public function eliminar()
{

$this->con= new cConexion();
	$this->con->conectar();
	$sql="call borrar_zona('".$this->Id_zona."');";
	//echo $sql;	
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}


public function listarZona($query){
	//si queremos paginar
		
	//*****
		$this->con= new cConexion();
		$this->con->conectar();
		$tabla=$this->con->consulta($query);
		$lista=array(); //creamos un arreglo
		if($this->con->num_rows($tabla)>0){
			while($fila=$this->con->fetch_array($tabla)){
				$tmp=new cZona(array($fila["Id_zona"],$fila["nombre"],$fila["latitud"],$fila["longitud"],$fila["status"]));
				array_push($lista,$tmp);		
			}
		}
		$this->con->desconectar();
		return $lista;
	}

}