<?php

include_once("cConexion.php");

class cCultivo
{
//Definicion de atributos
private $status;
private $nombre;
private $Id_cultivo;
private $hr;
private $prepluvial;
private $tempmax;
private $tempmin;
private $temprecomendada;
private $con;//Variable para la conexion a la BD

//Metodo Constructor

public function __construct ($args)
{
	$cantidad=sizeof($args);
	switch($cantidad){
		
		case 8:

		$this->Id_cultivo=$args[0];
		$this->nombre=$args[1];
		$this->hr=$args[2];
		$this->prepluvial=$args[3];
		$this->tempmax=$args[4];
		$this->tempmin=$args[5];
		$this->temprecomendada=$args[6];
		$this->status=$args[7];
		break;

		case 1:
		$this->Id_cultivo=$args[0];
		break;

		case 7:

		$this->nombre=$args[0];
		$this->hr=$args[1];
		$this->prepluvial=$args[2];
		$this->tempmax=$args[3];
		$this->tempmin=$args[4];
		$this->temprecomendada=$args[5];
		$this->status=$args[6];
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
public function getid_cultivo()
{
	return $this->Id_cultivo;
}

public function gethr()
{
	return $this->hr;
}
public function getprepluvial()
{
	return $this->prepluvial;
}

public function gettemprecomendada()
{
	return $this->temprecomendada;
}

public function gettempmax()
{
	return $this->tempmax;
}


public function gettempmin()
{
	return $this->tempmin;
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

public function setid_cultivo($valor)
{
	$this->Id_cultivo = $valor;
}

public function sethr($valor)
{
	$this->hr = $valor;
}

public function setprepluvial($valor)
{
	$this->prepluvial = $valor;
}

public function settemprecomendada($valor)
{
	$this->temprecomendada = $valor;
}

public function settempmax($valor)
{
	$this->tempmax = $valor;
}

public function settempmin($valor)
{
	$this->tempmin = $valor;
}



public function guardar(){
	$this->con= new cConexion();
	$this->con->conectar();
	$sql="call insertar_cultivo(";	
	$sql.="'".$this->nombre."',";
	$sql.="'".$this->hr."',";
	$sql.="'".$this->prepluvial."',";
	$sql.="'".$this->nombre."',";
	$sql.="'".$this->tempmax."',";
	$sql.="'".$this->tempmin."',";
	$sql.="'".$this->temprecomendada."',";
	$sql.="'".$this->nombre."',";
	$sql.="'".$this->status."');";
	//echo $sql;
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}

//Operaciones CRUD
public function modificar()
{

	$this->con= new cConexion();
	$this->con->conectar();
	$sql="call update_cultivo(";	
	$sql.="'".$this->Id_cultivo."',";
	$sql.="'".$this->nombre."',";
	$sql.="'".$this->hr."',";
	$sql.="'".$this->prepluvial."',";
	$sql.="'".$this->nombre."',";
	$sql.="'".$this->tempmax."',";
	$sql.="'".$this->tempmin."',";
	$sql.="'".$this->temprecomendada."',";
	$sql.="'".$this->nombre."',";
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
	$sql="call restaurar_cultivo('".$this->Id_cultivo."');";
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}
public function eliminar()
{

$this->con= new cConexion();
	$this->con->conectar();
	$sql="call borrar_cultivo('".$this->Id_cultivo."');";
	//echo $sql;	
	$this->con->consulta($sql);
	$this->con->desconectar();
	return true;
}


public function listarCultivo($query){
	//si queremos paginar
	//*****
		$this->con= new cConexion();
		$this->con->conectar();
		$tabla=$this->con->consulta($query);
		$lista=array(); //creamos un arreglo
		if($this->con->num_rows($tabla)>0){
			while($fila=$this->con->fetch_array($tabla)){
				$tmp=new cCultivo(array($fila["Id_cultivo"],,$fila["nombre"],$fila["HR"],$fila["pre_pluvial"],$fila["tempMax"],$fila["tempMin"],$fila["tempRecomendada"], $fila["status"]));
				array_push($lista,$tmp);		
			}
		}
		$this->con->desconectar();
		return $lista;
	}

}